<?php

namespace spec\App\Models;

use App\Models\Mailbox;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MailboxSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Mailbox::class);
    }
}
