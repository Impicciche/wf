<?php
use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testSalting()
    {
        $password = 'azertylqwerty';
        $salt = 'salt';
        
        require 'exercise.php';
        
        $this->assertEquals('azertylsaltqwerty', $saltedPassword);
    }
}

