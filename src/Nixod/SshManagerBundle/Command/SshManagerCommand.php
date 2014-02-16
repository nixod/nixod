<?php

namespace Nixod\SshManagerBundle\Command;

use Nixod\SshManagerBundle\Model\ClientConnection;
use Nixod\SshManagerBundle\Exception\ConnectionException;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class SshManagerCommand extends ContainerAwareCommand {

    private $socketPath;

    /**
     * @var   Nixod\KernelBundle\Service\SshManagerService
     */
    private $sshManagerService;

    protected function configure() {
        $this
                ->setName('nixod:ssh-manager')
                ->setDescription('Nixod SSH manager')
                ->addOption('max-clients', 'm', InputOption::VALUE_OPTIONAL, 'Maximum simultanius clients, set to 0 for unlimited', 100)
                ->addOption('idle-timeout', 't', InputOption::VALUE_OPTIONAL, 'Timeout in seconds after wich a non used connection will be destroyed, set to 0 for unlimited', 60)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->sshManagerService = $this->getContainer()->get('nixod_sshmanager.sshmanager');
        $this->sshManagerService->setIdleTimeout($input->getOption('idle-timeout'));

        $this->socketPath = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . 'nixod.sock';

        $socket = socket_create(AF_UNIX, SOCK_STREAM, 0);

        if (!$socket) {
            throw new ConnectionException(sprintf('Unable to create AF_UNIX socket, %s', socket_strerror(socket_last_error())));
        }

        if (!socket_bind($socket, $this->socketPath)) {
            throw new ConnectionException(sprintf('Unable to bind to %s", %s', $this->socketPath, socket_strerror(socket_last_error())));
        }
        socket_listen($socket);
        socket_set_nonblock($socket);
        while (true) {
            if ((@$newClient = socket_accept($socket)) !== false) {
                echo "accept $newClient\n";
                socket_set_nonblock($newClient);
                $this->sshManagerService->handle(new ClientConnection($newClient));
            }
            $this->sshManagerService->process();

            //echo "--------------\n";
            usleep(10000);
            //sleep(5);
        }
    }

    function __destruct() {
        file_exists($this->socketPath) && unlink($this->socketPath);
        print "Destroying " . $this->socketPath . "\n";
    }

}