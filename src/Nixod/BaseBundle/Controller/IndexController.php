<?php

namespace Nixod\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends Controller {

    public function indexAction() {
        $theme = 'base/minified';

        $kernelService = $this->get("nixod_kernel.kernel");
        $modules = json_encode($kernelService->getModulesLayout());
        return $this->render('NixodBaseBundle:Index:index.html.twig', array(
                    'theme' => $theme,
                    'modules' => $modules,
                    'css' => $kernelService->getModulesCss(),
                    'js' => $kernelService->getModulesJs())
        );
    }

    public function routerAction($module, $controller = 'Index', $action = 'index') {
        $data = $this->getRequest()->request->all();
        $controllerAction = sprintf('Module%sBundle:%s:%s', ucfirst($module), ucfirst($controller), $action);
        $response = $this->forward($controllerAction, $data);
        return $response;
    }

}
