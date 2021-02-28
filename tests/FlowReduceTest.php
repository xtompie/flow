<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowReduce;
use Xtompie\Flow\FlowGet;

class FlowReduceTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class([['a'], ['b'], ['c', 'd']]) {
            use Flow;
            use FlowReduce;
            use FlowGet;
            public function test()
            {
                return $this->reduce(function($carry, $item) {
                    return array_merge($carry, $item);
                });
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a', 'b', 'c', 'd'], $result->get());
    }
}