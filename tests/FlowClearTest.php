<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowClear;
use Xtompie\Flow\FlowGet;

class FlowClearTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a', 'b']) {
            use Flow;
            use FlowClear;
            use FlowGet;
            public function test()
            {
                return $this->clear();
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals([], $result->get());
    }
}