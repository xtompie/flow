<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowFilter;
use Xtompie\Flow\FlowGet;

class FlowFilterTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a', 'b']) {
            use Flow;
            use FlowFilter;
            use FlowGet;
            public function test()
            {
                return $this->filter(function($i) {
                    return $i == 'a';
                });
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a'], $result->get());
    }
}