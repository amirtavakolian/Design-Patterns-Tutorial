<?php

class LinkedinPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new LinkedinPublisher();
    }
}