<?php

namespace Xtompie\Flow;

trait Flow
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
