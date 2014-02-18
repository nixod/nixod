<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Nixod\KernelBundle\NixodKernelBundle(),
            new Nixod\BaseBundle\NixodBaseBundle(),
            new Module\BaseBundle\ModuleBaseBundle(),
            new Module\ConsoleBundle\ModuleConsoleBundle(),
            new Module\ExplorerBundle\ModuleExplorerBundle(),
            new Module\CronBundle\ModuleCronBundle(),
            new Module\SystemMonitorBundle\ModuleSystemMonitorBundle(),
            new Module\UserBundle\ModuleUserBundle(),
            new Nixod\SshManagerBundle\NixodSshManagerBundle(),
            new Module\LoginBundle\ModuleLoginBundle(),
            new Nixod\LogBundle\NixodLogBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
