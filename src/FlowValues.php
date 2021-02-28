<?php

namespace Xtompie\Flow;

trait FlowValues
{
    protected function values()
    {
        return new static(array_values($this->data));
    }
}
