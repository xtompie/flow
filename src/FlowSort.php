<?php

namespace Xtompie\Flow;

trait FlowSort
{
    protected function sort()
    {
        $data = $this->data;
        sort($data);
        return new static($data);
    }
}
