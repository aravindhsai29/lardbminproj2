<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;

class UsersTest extends TestCase
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
    $user = new User();
    $user->name = '';
    $user->email = '';
    $user->password = '';
    $this->assertTrue($user->save());
    }
    public function testUpdate()
    {
    $user = User::inRandomOrder()->first();
    $user->name = 'Steve Smith';
    $user->email = '';
    $user->password = '';
    $user->save();
    $this->assertTrue($user->update());
    }
    public function testDelete()
    {
    $user = User::inRandomOrder()->first();
    $user->name = '';
    $user->email = '';
    $user->password = '';
    $user->save();
    $this->assertTrue($user->delete());
    }
    public function testCount()
    {
    $user = User::All();
    $user->count='50';
    $this->assertEquals(50, $user->count());
    }
}
$user = User::All();
$userCount = $user->count();
$this->assertInternalType(IsType::TYPE_INT, $userCount);
$user = User::inRandomOrder()->first();
dd($user);
$this->assertInternalType('int' ,$user->id);
$this->assertInstanceOf('App\User' ,$user);   //clas path for App
$user = new User();
$user->name = $request->name;
$user->save();

}
