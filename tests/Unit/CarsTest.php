<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use Illuminate\Foundation\Testing\WithFaker;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testInsert()
    {

     $car = new Car();
     $car->make = '';
     $car->model = '';
     $car->year = '';
     $this->assertTrue($car->save());
      }
    public function testUpdate()
    {
    $car = Car::inRandomOrder()->first();
    $car->make = '';
    $car->model = '';
    $car->year = '2000';
    $car->save();
    $this->assertTrue($car->update());
    }
    public function testDelete()
    {
    $car = Car::inRandomOrder()->first();
    $car->make = '';
    $car->model = '';
    $car->year = ''
    $car->save()
    $this->assertTrue($car->delete());
    }
    public function testCount()
    {
    $car = Car::All();
    $car->count='50';
    $this->assertEquals(50, $car->count());
    }
    public function testInt()
    {
    $car = Car::inRandomOrder()->first();

    $this->assertFalse(Is_Int($car->year));

    }
    public function testMake()
    {
    $car = Car::inRandomOrder()->first();
    $value=$car->make;
    $this->assertContains($value, ['Honda','Toyota','Ford']);
    }
    public function testString()
    {
    $car = Car::inRandomOrder()->first();
    $this->assertIsString($car->model);
    }
}

