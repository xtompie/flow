<?php

namespace Xtompie\Flow;

trait Flow
{
    protected $flow;

    public function __construct(array $data)
    {
        $this->flow = collect($data);
    }
}
