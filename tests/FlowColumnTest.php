<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowColumn;
use Xtompie\Flow\FlowGet;

class FlowColumnTest extends TestCase
{
    public function testColumn()
    {
        // given
        $flow = new class([
            ['id' => 1, 'title' => 'A'],
            ['id' => 2, 'title' => 'B'],
        ]) {
            use Flow;
            use FlowColumn;
            use FlowGet;
            public function test()
            {
                return $this->column('id');
            }
        };

        // when
        $result = $flow->test()->get();

        // then
        $this->assertEquals([1, 2], $result);
    }

    public function testColumnAndIndex()
    {
        // given
        $flow = new class([
            ['id' => 1, 'title' => 'A'],
            ['id' => 2, 'title' => 'B'],
        ]) {
            use Flow;
            use FlowColumn;
            use FlowGet;
            public function test()
            {
                return $this->column('title', 'id');
            }
        };

        // when
        $result = $flow->test()->get();

        // then
        $this->assertEquals([1 => 'A', 2 => 'B'], $result);
    }
}