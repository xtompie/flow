<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowGet;

class FlowGetTest extends TestCase
{
    public function test()
    {
        // given
        $data = ['a', 'b'];
        $flow = new class($data) {
            use Flow;
            use FlowGet;
        };

        // when
        $result = $flow->get();

        // then
        $this->assertEquals($data, $result);
    }
}