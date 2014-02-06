<?php

namespace Module\BaseBundle\Factory;

use Module\BaseBundle\Entity\Module;
use Module\BaseBundle\Entity\Layout;

class ModuleFactory {

    public static function getModule($name, $layoutData = null) {
        $module = new Module($name);
        if (is_null($layoutData)) {
            return $module;
        }
        $layout = new Layout();
        foreach (Layout::getFields() as $fieldName => $default) {
            if(!empty($layoutData[$fieldName])) {
                $default = $layoutData[$fieldName];
            }
            $layout->{"set".  ucfirst($fieldName)}($default);
        }
        $module->setLayout($layout);
        return $module;
    }
}