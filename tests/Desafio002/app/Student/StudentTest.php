<?php

namespace Desafio002\app\Student;

use App\Desafio002\app\Student\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    public function testShouldReturnStudentInstance()
    {
        $student = $this->createStudent();

        $this->assertInstanceOf(Student::class, $student);
    }

    public function testShouldReturnNameAttribute()
    {
        $student = $this->createStudent();
        $this->assertEquals('nicolas', $student->name());
    }

    public function testShouldChangeNameValueWhenUpdateName()
    {
        $student = $this->createStudent();
        $student->updateName('Daniel');
        $this->assertEquals('Daniel', $student->name());
    }


    public function createStudent(): Student
    {
        return new Student('nicolas');
    }
}