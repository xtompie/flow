<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowMap;
use Xtompie\Flow\FlowGet;

class FlowMapTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class(['a', 'b']) {
            use Flow;
            use FlowMap;
            use FlowGet;
            public function test()
            {
                return $this->map(function($i) {
                    return $i . $i;
                });
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals(['aa', 'bb'], $result->get());
    }
}