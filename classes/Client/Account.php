<?php

namespace App\Client;

class Account
{
    /**
     * Client fisrt name
     *
     * @var string
     */
    protected $firstName;

    /**
     * Client last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Constructor for build new client account
     *
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}