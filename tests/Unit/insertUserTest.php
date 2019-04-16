<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class insertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user= new User();
        $user->name = 'J.J.Johnson';
        $user->email = 'bdggh@zzd.com';
        $user->password = '000000000';
        $this->assertTrue($user->save());
//        $this->assertTrue(true);


    }
}
