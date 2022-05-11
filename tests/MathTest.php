<?php

use PHPUnit\Framework\TestCase;
use Tolehoai\Mvc\Math;
use Tolehoai\Mvc\User;
class MathTest extends TestCase
{

    /**
     * @dataProvider sumProvider
     * @return void
     */
    public function testSum($params, $expected)
    {
        $math = new Math();
        $result = $math->sum($params['number1'],$params['number2']);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array[]
     */
    public function sumProvider(): array
    {
        return [
            'case-with-number-is-one' => [
                'params' => [
                    'number1' => 1,
                    'number2' => 1,
                ],
                'expected' => 2
            ],
            'case-with-number-is-zero' => [
                'params' => [
                    'number1' => 2,
                    'number2' => 2,
                ],
                'expected' => 4
            ],
            'case-with-number-is-two' => [
                'params' => [
                    'number1' => 4,
                    'number2' => 1,
                ],
                'expected' => 5
            ]
        ];
    }
}
