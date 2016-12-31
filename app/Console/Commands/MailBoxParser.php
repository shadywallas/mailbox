<?php

namespace App\Console\Commands;

use App\Messages;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Prophecy\Exception\InvalidArgumentException;

class MailBoxParser extends Command
{

    /**
     *
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailbox:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $json = Storage::get('messages_sample.json');

        $messages = $this->parse($json);

        foreach ($messages as $ins){
            try{
                Messages::insert($ins);
                echo 'inserted';
            }catch (\Exception $exception){
               echo $exception->getMessage();
            }

        }

    }

    public function parse($argument1)
    {
        $r = [];
        $messages = json_decode($argument1);
        if (!is_object($messages)) {
            throw new InvalidArgumentException("json not valid");
        }

        if (!isset($messages->messages) || empty($messages->messages)) {
            throw new InvalidArgumentException("unable to find message key");
        }
        foreach ($messages->messages as $messages) {
            $r[] = (array)$messages;
        }


        return (array)$r;
    }
}
