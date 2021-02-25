<?php

namespace Xtompie\Flow;

trait FlowPublicFilter
{
    public function filter($callback)
    {
        return new static($this->flow->filter($callback)->all());
    }
}
