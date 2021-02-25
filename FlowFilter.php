<?php

namespace Xtompie\Flow;

trait FlowFilter
{
    protected function filter($callback)
    {
        return new static($this->flow->filter($callback)->all());
    }
}
