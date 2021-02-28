<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowEach;
use Xtompie\Flow\FlowGet;

class FlowEachTest extends TestCase
{
    public function test()
    {
        // given
        $data = ['a', 'b'];
        $capture = [];
        $flow = new class($data) {
            use Flow;
            use FlowEach;
            use FlowGet;
            public function test(&$capture)
            {
                return $this->each(function($item) use (&$capture) {
                    $capture[] = $item;
                });
            }
        };

        // when
        $flow->test($capture);

        // then
        $this->assertEquals($data, $capture);
    }
}