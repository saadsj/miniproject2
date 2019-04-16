<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class deleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user= new User();
        $user->name = 'abcd';
        $user->email = 'abcd@xyz.com';
        $user->password = '123456';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
