<?php

namespace Xtompie\Flow;

trait FlowGet
{
    protected function get()
    {
        return $this->flow->all();
    }
}
