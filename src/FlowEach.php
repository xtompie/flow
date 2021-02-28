<?php

namespace Xtompie\Flow;

trait FlowEach
{
    protected function each($callback)
    {
        $this->flow->each($callback);
        return $this;
    }
}
