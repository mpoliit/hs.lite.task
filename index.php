<?php

require_once 'vendor/autoload.php';

use \Classes\Contact;




$contact = new Contact();
$newContact = $contact->phone('000-555-000')
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

echo $newContact;