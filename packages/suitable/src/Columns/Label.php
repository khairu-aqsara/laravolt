<?php

namespace Laravolt\Suitable\Columns;

class Label extends Column implements ColumnInterface
{
    protected $headerAttributes = ['class' => 'center aligned'];

    protected $cellAttributes = ['class' => 'center aligned'];

    protected $labelClass = [];

    public function cell($cell, $collection, $loop)
    {
        $label = $cell->{$this->field};
        if ($label) {
            $class = implode(" ", $this->labelClass);
            return sprintf('<div class="ui label basic %s">%s</div>', $class, $cell->{$this->field});
        }

        return '-';
    }

    public function addClass(string $class)
    {
        array_push($this->labelClass, $class);

        return $this;
    }
}
