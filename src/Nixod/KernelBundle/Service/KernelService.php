<?php

namespace Nixod\KernelBundle\Service;

use \Symfony\Component\DependencyInjection\Container;
use Module\BaseBundle\Entity\Module;
use Module\BaseBundle\Entity\Layout;
use Module\BaseBundle\Exception\ModuleLoadingException;
use Module\BaseBundle\Factory\ModuleFactory;
use Nixod\KernelBundle\Service\SshService;

class KernelService {

    /**
     *
     * @var Container $container;
     */
    private $container;
    private $modules;
    private $layouts;
    private $modulesJs;
    private $modulesCss;
    private $sshService;

    public function __construct(Container $container, SshService $sshService) {
        $this->container = $container;
        $this->sshService = $sshService;
        $this->loadModules();
    }

    private function loadModules() {
        $this->modules = array();
        $this->layouts = array();
        $this->modulesJs = array();
        $this->modulesCss = array();
        if(!$this->sshService->isConnected()) {
            $this->loadModule('login');
            return;
        }
        foreach ($this->container->getParameter("modules")as $module) {
            $this->loadModule($module);
        }
    }

    private function loadModule($moduleName) {
        if (!empty($this->modules[$moduleName])) {
            throw new ModuleLoadingException(sprintf("Cannot load module [$moduleName], another module with the same name is already loaded"));
        }
        $module = $this->container->getParameter("module_$moduleName");
        if (empty($module)) {
            throw new ModuleLoadingException(sprintf("Error loading module [%s] cannot read parameters configuration from module.yml, or module.yml not found", $moduleName));
        }
        if (empty($module['layout'])) {
            $module['layout'] = null;
        }
        $this->modules[$moduleName] = ModuleFactory::getModule($moduleName, $module['layout']);
        //Layout
        if (!is_null($this->modules[$moduleName]->getLayout())) {
            $this->layouts[$moduleName] = $this->modules[$moduleName]->getLayout()->toArray();
            if (is_null($this->layouts[$moduleName]['icon'])) {
                $this->layouts[$moduleName]['icon'] = 'bundles/nixodbase/images/nixod.png';
            }
        }
        //CSS
        if (!empty($module['css'])) {
            foreach ($module['css'] as $css) {
                $this->modulesCss[] = "bundles/module$moduleName/css/$css";
            }
        }
        //JS
        if (!empty($module['js'])) {
            foreach ($module['js'] as $js) {
                $this->modulesJs[] = "bundles/module$moduleName/js/$js";
            }
        }
    }

    public function getModules() {
        return $this->modules;
    }

    public function getModulesLayout() {
        return $this->layouts;
    }
    
    public function getModulesCss() {
        return $this->modulesCss;
    }
    
    public function getModulesJs() {
        return $this->modulesJs;
    }

}