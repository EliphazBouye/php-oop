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
     * City of client
     *
     * @var string
     */
    protected $city;

    /**
     * Constructor for build new client account
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $city
     */
    public function __construct(string $firstName, string $lastName, string $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->city = $city;
    }
}