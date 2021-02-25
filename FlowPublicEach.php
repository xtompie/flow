<?php

namespace Xtompie\Flow;

trait FlowEach
{
    public function each($callback)
    {
        $this->flow->each($callback);
        return $this;
    }
}
