<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class RecordCounterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRecordCounter()
    {
        $user = User::all();
        $recordCount = $user->count();
        $this->assertEquals(50, $recordCount);
    }
}
