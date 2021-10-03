<?php


class Svg {
    public $path;
    public $svgName;
    public $className;

    public function __construct($svgDir, $rootDir = __DIR__ . '/../static')
    {
        $this->path = "$rootDir/$svgDir";
    }

    public function setSvg($svgName, $className = '')
    {
        $this->className = $className;
        $this->svgName = $svgName;
        return $this;
    }

    public function __toString()
    {
        try {
            $svgContent = file_get_contents("$this->path/$this->svgName.svg");
        } catch (Exception $e) {
            return '';
        }

        if (strlen($this->className)) {
            return sprintf(
                '<div class="%s">%s</div>',
                $this->className,
                $svgContent,
            );
        }

        return $svgContent;
    }
}

?>