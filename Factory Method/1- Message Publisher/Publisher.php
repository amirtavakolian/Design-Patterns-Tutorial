<?php

// Publisher is for Product classes ==> Product in factory method design pattern
// Publisher - Product ==> classes which can publish the messages for us :D :P

interface Publisher
{
    // publish() | send() | share() or any name which is suitable to your project
    public function publish(Message $message);
}

// you can add other data beside message ==> Ex: a user model