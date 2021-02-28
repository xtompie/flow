<?php

namespace Xtompie\Flow;

trait FlowOnly
{
    protected function only($keys)
    {
        $data = $this->data;
        foreach ($data as $key => $value) {
            foreach ($value as $value_key =>  $value_value) {
                if (!in_array($value_key, $keys)) {
                    unset($value[$value_key]);
                }
            }
            $data[$key] = $value;
        }
        return new static($data);
    }
}
