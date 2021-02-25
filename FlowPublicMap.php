<?php

namespace Xtompie\Flow;

trait FlowPublicMap
{
    public function map($callback)
    {
        return new static($this->flow->map($callback)->all());
    }
}
