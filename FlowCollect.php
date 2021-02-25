<?php

namespace Xtompie\Flow;

trait FlowCollect
{
    protected function collect()
    {
        return collect($this->flow->all());
    }
}
