<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowReject;
use Xtompie\Flow\FlowGet;

class FlowRejectTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a', 'b']) {
            use Flow;
            use FlowReject;
            use FlowGet;
            public function test()
            {
                return $this->reject(function($i) {
                    return $i == 'b';
                });
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a'], $result->get());
    }
}