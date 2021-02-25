<?php

namespace Xtompie\Flow;

trait FlowMake
{
    public static function make(array $data)
    {
        return new static($data);
    }
}
