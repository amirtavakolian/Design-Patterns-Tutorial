<?php

// it can be any controller - you can select any name for your controller (suitable to your project)

class MessageController
{

    public function __construct(private MessagePublisher $messagePublisher)
    {
        // you can even bind MessagePublisher to service container
        // $this->app->bind(MessagePublisher::class, LinkedinPublisherFactory::class);
        // or you can use simple factory in service container
        // or you can use contextual binding ==> the messages of x class must send with LinkedinPublisher
        // the messages of y class must send with InstagramPublisher
    }

    public function publishMessage(Request $request)
    {
        $this->messagePublisher->publish(new Message($request->get('title'), $request->get('content'), $request->file('image')));

        // this message can be read from config or you can new Message class
    }
}