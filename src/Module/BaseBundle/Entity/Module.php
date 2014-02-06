<?php
namespace Module\BaseBundle\Entity;

class Module {
    
    private $name;
    /**
     *
     * @var Layout
     */
    private $layout;
    
    public function __construct($name, $layout = null) {
        $this->name = $name;
        $this->layout = $layout;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getLayout() {
        return $this->layout;
    }

    public function setLayout(Layout $layout) {
        $this->layout = $layout;
        return $this;
    }
    
}