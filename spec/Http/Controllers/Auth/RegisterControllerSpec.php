<?php

namespace spec\App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\RegisterController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RegisterControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RegisterController::class);
    }
}
