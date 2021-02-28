<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowValues;
use Xtompie\Flow\FlowGet;

class FlowValuesTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a' => 'a', 'b' => 'b']) {
            use Flow;
            use FlowValues;
            use FlowGet;
            public function test()
            {
                return $this->values();
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a', 'b'], $result->get());
    }
}