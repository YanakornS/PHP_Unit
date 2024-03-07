<?php
include "Calculator.php";



use PHPUnit\Framework\Testcase;

class Calculator_Test extends Testcase
{
    private $calculator;
    public function setUp(): void
    {
        $this->calculator = new Calcultor();
    }

    public function testAdd1()
    {
        $this->assertEquals(5, $this->calculator->add(4, 1));
    }
    public function testmultiply()
    {
        $this->assertEquals(4, $this->calculator->multiply(4, 1));
    }
    public function testsubtract3()
    {
        $this->assertEquals(3, $this->calculator->subtract(4, 1));
    }
    
     // เพิ่มฟังก์ชันหาร
    public function testDivide() {
    $this->assertEquals(2, $this->calculator->divide(4, 2));
    }

    //สอบว่าฟังก์ชัน divide จะขึ้นข้อผิดพลาดอย่างถูกต้องเมื่อพยายามหารด้วยศูนย์.
    public function testDivideByZero() {
    $this->expectException(InvalidArgumentException::class);
    $this->calculator->divide(4, 0);
   
    }   

}
