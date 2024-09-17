<?php

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new InstagramPublisher();
    }
}

// here we have deffer the object creation to this factory class ==> Object Creationg Process

// here we have used "new" keyword and that's ok.
// we can use new keyword in classes which they're responsibilite is creating object.

