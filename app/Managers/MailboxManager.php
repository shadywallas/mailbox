<?php

namespace App\Managers;

use App\Models\Mailbox;

class MailboxManager
{
    private $repository;

    public function __construct(Mailbox $argument1)
    {
        $this->repository = $argument1;
    }

    public function listMessages()
    {

        return Mailbox::all();
    }
}
