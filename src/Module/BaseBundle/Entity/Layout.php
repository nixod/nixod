<?php

namespace Module\BaseBundle\Entity;

class Layout {

    const DO_NOTHING_ON_CLOSE = 1;
    const HIDE_ON_CLOSE = 2;
    const DISPOSE_ON_CLOSE = 3;
    const DEFAULT_TITLE = '';
    const DEFAULT_WIDTH = 600;
    const DEFAULT_HEIGHT = 300;
    const DEFAULT_VISIBLE = false;
    const DEFAULT_ICON = null;
    const DEFAULT_CLOSABLE = true;
    const DEFAULT_MAXIMIZABLE = true;
    const DEFAULT_MINIMIZABLE = true;
    const DEFAULT_MOVABLE = true;
    const DEFAULT_RESIZABLE = true;
    const DEFAULT_CLOSE_OPERATION = self::HIDE_ON_CLOSE;
    const DEFAULT_POSITION = 'center';
    const DEFAULT_SHOW_IN_TASKBAR = true;
    const DEFAULT_SHOW_DESKTOP_ICON = true;
    const DEFAULT_MAXIMIZED = false;

    private static $fields = array(
        'title' => self::DEFAULT_TITLE,
        'width' => self::DEFAULT_WIDTH,
        'height' => self::DEFAULT_HEIGHT,
        'visible' => self::DEFAULT_VISIBLE,
        'icon' => self::DEFAULT_ICON,
        'closable' => self::DEFAULT_CLOSABLE,
        'maximizable' => self::DEFAULT_MAXIMIZABLE,
        'minimizable' => self::DEFAULT_MINIMIZABLE,
        'movable' => self::DEFAULT_MOVABLE,
        'resizable' => self::DEFAULT_RESIZABLE,
        'defaultCloseOperation' => self::DEFAULT_CLOSE_OPERATION,
        'position' => self::DEFAULT_POSITION,
        'showInTaskBar' => self::DEFAULT_SHOW_IN_TASKBAR,
        'showDesktopIcon' => self::DEFAULT_SHOW_DESKTOP_ICON,
        'maximized' => self::DEFAULT_MAXIMIZED
    );

    /**
     * Window title
     * @default ""
     * @var string $title
     */
    private $title;

    /**
     * Window width in pixels
     * @default 600
     * @var integer $width
     */
    private $width;

    /**
     * Window height in pixels
     * @default 300
     * @var integer $height
     */
    private $height;

    /**
     * Window startup visibility
     * @var boolean $visible
     */
    private $visible;

    /**
     * Window icon used also as desktop icon, taskbar icon and contextual menu icon
     * @var mixed $icon
     */
    private $icon;

    /**
     * 
     * @var boolean $closable
     */
    private $closable;
    private $maximizable;
    private $minimizable;
    private $movable;
    private $resizable;
    private $defaultCloseOperation;

    /**
     * Start up position<br/>
     * Possible values: 'top', 'bottom', 'left', 'right', 'center'<br/>
     * Support coupled positions. exemple: 'top right', 'left bottom'  <br/>  
     * @default 'center'        
     * @var string $position 
     */
    private $position;
    private $showInTaskBar;
    private $showDesktopIcon;
    private $maximized;

    function __construct($title = self::DEFAULT_TITLE, $width = self::DEFAULT_WIDTH, $height = self::DEFAULT_HEIGHT, $visible = self::DEFAULT_VISIBLE, $icon = self::DEFAULT_ICON, $closable = self::DEFAULT_CLOSABLE, $maximizable = self::DEFAULT_MAXIMIZABLE, $minimizable = self::DEFAULT_MINIMIZABLE, $movable = self::DEFAULT_MOVABLE, $resizable = self::DEFAULT_RESIZABLE, $defaultCloseOperation = self::DEFAULT_CLOSE_OPERATION, $position = self::DEFAULT_POSITION, $showInTaskBar = self::DEFAULT_SHOW_IN_TASKBAR, $showDesktopIcon = self::DEFAULT_SHOW_DESKTOP_ICON, $maximized = self::DEFAULT_MAXIMIZED) {
        $this->title = $title;
        $this->width = $width;
        $this->height = $height;
        $this->visible = $visible;
        $this->icon = $icon;
        $this->closable = $closable;
        $this->maximizable = $maximizable;
        $this->minimizable = $minimizable;
        $this->movable = $movable;
        $this->resizable = $resizable;
        $this->defaultCloseOperation = $defaultCloseOperation;
        $this->position = $position;
        $this->showInTaskBar = $showInTaskBar;
        $this->showDesktopIcon = $showDesktopIcon;
        $this->maximized = $maximized;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    public function getClosable() {
        return $this->closable;
    }

    public function setClosable($closable) {
        $this->closable = $closable;
        return $this;
    }

    public function getMaximizable() {
        return $this->maximizable;
    }

    public function setMaximizable($maximizable) {
        $this->maximizable = $maximizable;
        return $this;
    }

    public function getMinimizable() {
        return $this->minimizable;
    }

    public function setMinimizable($minimizable) {
        $this->minimizable = $minimizable;
        return $this;
    }

    public function getMovable() {
        return $this->movable;
    }

    public function setMovable($movable) {
        $this->movable = $movable;
        return $this;
    }

    public function getResizable() {
        return $this->resizable;
    }

    public function setResizable($resizable) {
        $this->resizable = $resizable;
        return $this;
    }

    public function getDefaultCloseOperation() {
        return $this->defaultCloseOperation;
    }

    public function setDefaultCloseOperation($defaultCloseOperation) {
        $this->defaultCloseOperation = $defaultCloseOperation;
        return $this;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    public function getShowInTaskBar() {
        return $this->showInTaskBar;
    }

    public function setShowInTaskBar($showInTaskBar) {
        $this->showInTaskBar = $showInTaskBar;
        return $this;
    }

    public function getShowDesktopIcon() {
        return $this->showDesktopIcon;
    }

    public function setShowDesktopIcon($showDesktopIcon) {
        $this->showDesktopIcon = $showDesktopIcon;
        return $this;
    }

    public function getMaximized() {
        return $this->maximized;
    }

    public function setMaximized($maximized) {
        $this->maximized = $maximized;
        return $this;
    }

    public function toArray() {
        return array(
            'title' => $this->title,
            'width' => $this->width,
            'height' => $this->height,
            'visible' => $this->visible,
            'icon' => $this->icon,
            'closable' => $this->closable,
            'maximizable' => $this->maximizable,
            'minimizable' => $this->minimizable,
            'movable' => $this->movable,
            'resizable' => $this->resizable,
            'defaultCloseOperation' => $this->defaultCloseOperation,
            'position' => $this->position,
            'showInTaskBar' => $this->showInTaskBar,
            'showDesktopIcon' => $this->showDesktopIcon,
            'maximized' => $this->maximized
        );
    }

    public static function getFields() {
        return self::$fields;
    }

}