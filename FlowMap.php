<?php

namespace Xtompie\Flow;

trait FlowMap
{
    protected function map($callback)
    {
        return new static($this->flow->map($callback)->all());
    }
}
