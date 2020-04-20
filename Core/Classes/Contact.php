<?php

namespace Classes;

use Interfaces\IContactBuilder;

class Contact implements IContactBuilder
{
    protected $contact;

    protected function reset(): void
    {
        $this->contact = new \stdClass;
    }

    public function phone(string $phone): IContactBuilder
    {
        $this->reset();
        $this->contact = "Phone: <strong>" . $phone . '</strong>,';

        return $this;
    }

    public function name(string $name): IContactBuilder
    {
        $this->contact .= " Name: <strong>" . $name . '</strong>,';

        return $this;
    }

    public function surname(string $surname): IContactBuilder
    {
        $this->contact .= " Surname: <strong>" . $surname . '</strong>,';

        return $this;
    }

    public function email(string $email): IContactBuilder
    {
        $this->contact .= " Email: <strong>" . $email . '</strong>,';

        return $this;
    }

    public function address(string $address): IContactBuilder
    {
        $this->contact .= " Adress: <strong>" . $address . '</strong>,';

        return $this;
    }

    public function build(): string
    {
        $contact = mb_substr($this->contact, 0, -1);

        return $contact;
    }
}