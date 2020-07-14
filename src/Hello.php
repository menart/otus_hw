<?php

namespace menart\otus_hw;

class Hello
{

    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return 'Hello '.$phrase.'! You are added to list my friends! :)';
    }
}
