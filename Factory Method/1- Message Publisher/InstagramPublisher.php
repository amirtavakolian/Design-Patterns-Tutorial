<?php

class InstagramPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo "send message ==> title:{$message->getTitle()} content: {$message->getContent()}";
    }
}

// all the business logic for publishing message in instagram should be here.
// Object Processing should be done in here.

// maybe this instagram publisher needs a package to install or a specific config or specific dependencies.

// we inject the dependencies in here (in this class) and call the methods of them
// in publish() method to send request to instagram or anything you like :D :P
