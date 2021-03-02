<?php

namespace Xtompie\Flow;

trait FlowColumn
{
    protected function column($column, $index = null)
    {
        return new static(array_column($this->data, $column, $index));
    }
}
