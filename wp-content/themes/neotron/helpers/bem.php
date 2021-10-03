<?php

class BemBlock {
    public $block;
    public $modifier;
    public $el;

    public function __construct($block)
    {
        $this->block = $block;
    }

    public function setMod($modifier, $condition = true)
    {
        if ($condition) {
            $this->modifier = $modifier;
        }

        return $this;
    }

    public function setEl($el)
    {
        $this->el = $el;

        return $this;
    }

    public function __toString()
    {
        $cn = $this->block;
        if ($this->el) {
            $cn = sprintf("%s__%s", $this->block, $this->el);
            $this->el = '';
        }

        if ($this->modifier) {
            if (!is_array($this->modifier)) {
                $cn .= sprintf(" %s_%s", $cn, $this->modifier);
                $this->modifier = '';
            } else {
                $classNames = '';
                foreach ($this->modifier as $modifierName) {
                    $classNames .= sprintf(" %s_%s", $cn, $modifierName);
                    $this->modifier = '';
                }

                $cn .= $classNames;
            }
        }

        return $cn;
    }
}

?>