<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowSort;
use Xtompie\Flow\FlowGet;

class FlowSortTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a', 'c', 'b']) {
            use Flow;
            use FlowSort;
            use FlowGet;
            public function test()
            {
                return $this->sort(function($carry, $item) {
                    return array_merge($carry, $item);
                });
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a', 'b', 'c'], $result->get());
    }
}