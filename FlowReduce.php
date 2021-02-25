<?php

namespace Xtompie\Flow;

trait FlowReduce
{
    protected function map($callback)
    {
        return new static($this->flow->reduce($callback, collect())->all());
    }
}
