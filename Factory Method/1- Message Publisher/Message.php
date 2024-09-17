<?php

class Message
{

    // we get data from construct because it's better to have an im-mutable class.
    // im-mutable classes has fewer changes.
    public function __construct(private string $title, private string $content, private string $image)
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}