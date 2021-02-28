<?php

namespace Xtompie\Flow;

trait FlowFilter
{
    protected function filter($callback)
    {
        return new static(array_filter($this->data, $callback, ARRAY_FILTER_USE_BOTH));
    }
}
