<?php

namespace Xtompie\Flow;

trait FlowOnly
{
    protected function only($keys)
    {
        return new static($this->flow->filter(function($item) use ($keys) {
            return collect($item)->only($keys)->all();
        })->all());
    }
}
