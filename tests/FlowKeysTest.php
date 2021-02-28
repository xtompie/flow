<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowKeys;
use Xtompie\Flow\FlowGet;

class FlowKeysTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a' => '1', 'b' => '2']) {
            use Flow;
            use FlowKeys;
            use FlowGet;
            public function test()
            {
                return $this->keys();
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['a', 'b'], $result->get());
    }
}