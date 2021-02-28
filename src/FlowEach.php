<?php

namespace Xtompie\Flow;

trait FlowEach
{
    protected function each($callback)
    {
        foreach ($this->data as $index => $item) {
            call_user_func($callback, $item, $index);
        }
        return $this;
    }
}
