<?php

namespace Alger\Skeleton\Test\Unit;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class HelperTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = (new ObjectManager($this))->getObject('\Alger\Skeleton\Helper\Bar');
    }

    /**
     * @param $expectedResult
     * @param $brew
     *
     * @dataProvider pourDrinkDataProvider
     */
    public function testPourDrink($brew, $expectedResult)
    {
        $this->assertSame($expectedResult, $this->object->pourDrink($brew));
    }

    public function pourDrinkDataProvider()
    {
        return [
            ['Sam', 'Adams'],
            ['Blue', 'Moon']
        ];
    }
}
