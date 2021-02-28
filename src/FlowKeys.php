<?php

namespace Xtompie\Flow;

trait FlowKeys
{
    protected function keys()
    {
        return new static(array_keys($this->data));
    }
}
