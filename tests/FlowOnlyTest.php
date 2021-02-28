<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowOnly;
use Xtompie\Flow\FlowGet;

class FlowOnlyTest extends TestCase
{
    public function test()
    {
        // given
        $flow = new class([
            ['id' => 1, 'title' => 'A'],
            ['id' => 2, 'title' => 'B'],
        ]) {
            use Flow;
            use FlowOnly;
            use FlowGet;
            public function test($keys)
            {
                return $this->only($keys);
            }
        };

        // when
        $result = $flow->test(['id']);

        // then
        $this->assertEquals([['id' => 1], ['id' => 2]], $result->get());
    }
}