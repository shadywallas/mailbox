<?php

namespace spec\App\Console\Commands;

use App\Console\Commands\MailBoxParser;
use App\Messages;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MailBoxParserSpec extends ObjectBehavior
{


    function it_is_initializable()
    {
        $this->shouldHaveType(MailBoxParser::class);
    }

    /**
     *
     */
    function it_parsers_json_object_to_array(){
        $message1 = new \stdClass();
        $message1->uid = '21';
        $message1->sender = 'Ernest Hemingway';
        $message1->subject = 'animals';
        $message1->message = 'This is a tale about nihilism. The story is about a combative nuclear engineer who hates animals. It starts in a ghost town on a world of forbidden magic. The story begins with a legal dispute and ends with a holiday celebration.';
        $message1->time_sent = 1459239867;

        $message2 = new \stdClass();
        $message2->uid = '22';
        $message2->sender = 'Stephen King';
        $message2->subject = 'adoration';
        $message2->message = 'The story is about a fire fighter, a naive bowman, a greedy fisherman, and a clerk who is constantly opposed by a heroine. It takes place in a small city. The critical element of the story is an adoration.';
        $message2->time_sent = 1459248747;

        $json = '{
                  "messages": [
                    {
                      "uid": "21",
                      "sender": "Ernest Hemingway",
                      "subject": "animals",
                      "message": "This is a tale about nihilism. The story is about a combative nuclear engineer who hates animals. It starts in a ghost town on a world of forbidden magic. The story begins with a legal dispute and ends with a holiday celebration.",
                      "time_sent": 1459239867
                    },
                    {
                      "uid": "22",
                      "sender": "Stephen King",
                      "subject": "adoration",
                      "message": "The story is about a fire fighter, a naive bowman, a greedy fisherman, and a clerk who is constantly opposed by a heroine. It takes place in a small city. The critical element of the story is an adoration.",
                      "time_sent": 1459248747
                    }]
                  }';
        $this->parse($json)->shouldHaveCount(2);
        //$this->parse($json)->shouldReturn([(array)$message1,(array)$message2]);

    }
}
