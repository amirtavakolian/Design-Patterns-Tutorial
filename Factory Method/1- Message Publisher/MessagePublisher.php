<?php

// MessagePublisher is our Creator in uml ==> it's an abstract for our Creator classes.
// creators are the class which the object processing (our business logic) & object creating are done in them.
// if your class contains business logic (wana do something), use abstract class.

abstract class MessagePublisher
{

    // you can pass a model Ex: user model beside $message
    public function publish(Message $message)
    {
        $publisher = $this->createPublisher();
        $publisher->publish($message);
    }

    abstract protected function createPublisher(): Publisher;

    // createPublisher() is our factory method which creates our publisher
    // if we haven't this factory method, we had to use switch or if else
    // Ex: if publisher was Linkedin do this, if it was instagram do that &....
    // so this factory method (createPublisher) differs the object creation to the sub-classes

}