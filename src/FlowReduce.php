<?php

namespace Xtompie\Flow;

trait FlowReduce
{
    protected function reduce($callback)
    {
        $carry = [];
        foreach ($this->data as $key => $value) {
            $carry = $callback($carry, $value, $key);
        }
        return new static($carry);
    }
}
