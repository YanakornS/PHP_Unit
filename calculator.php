<?php

    class Calcultor{

            public function multiply($num1,$num2){
                return $num1 * $num2;

            }
            public function add ($num1,$num2){
                return $num1 + $num2;

            }
            public function subtract($num1,$num2){
                return $num1 - $num2;
            }
            // เพิ่มฟังก์ชันหาร
    public function divide($num1, $num2) {
        // ตรวจสอบเพื่อหลีกเลี่ยงการหารด้วยศูนย์
        if ($num2 == 0) {
            throw new InvalidArgumentException("Divider cannot be zero.");
        }
        return $num1 / $num2;
    }
    }


    




