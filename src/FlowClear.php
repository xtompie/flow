<?php

namespace Xtompie\Flow;

trait FlowClear
{
    protected function clear()
    {
        return new static([]);
    }
}
