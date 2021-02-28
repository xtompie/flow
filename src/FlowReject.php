<?php

namespace Xtompie\Flow;

trait FlowReject
{
    protected function reject($callback)
    {
        return new static(array_filter(
            $this->data, 
            function ($value, $key) use ($callback) {
                return !call_user_func($callback, $value, $key);
            }, 
            ARRAY_FILTER_USE_BOTH
        ));
    }
}
