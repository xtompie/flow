<?php

namespace Xtompie\Flow;

trait FlowMap
{
    protected function map($callback)
    {
        $data = $this->data;
        foreach ($data as $key => $value) {
            $data[$key] = $callback($value, $key);
        }
        return new static($data);
    }
}
