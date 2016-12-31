<?php

namespace spec\App\Managers;

use App\Managers\MailboxManager;
use App\Models\Mailbox;
use PhpSpec\ObjectBehavior;

class MailboxManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MailboxManager::class);
    }

    function let(Mailbox $mailbox)
    {
        $this->beConstructedWith($mailbox);
    }


}
