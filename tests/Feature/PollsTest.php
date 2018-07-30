<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PollsTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    public function a_user_can_browse_all_polls()
    {
        $poll = factory('App\Poll')->create();

        $response = $this->get('/polls')
        ->assertSee($poll->title);
    }

    /** @test  */
    public function a_user_can_read_a_single_poll()
    {
        $poll = factory('App\Poll')->create();

        $response = $this->get('/polls/'.$poll->id)
            ->assertSee($poll->title);
    }
}
