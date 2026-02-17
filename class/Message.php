<?php
class Message {

    public $username;
    public $message;
   

    public function __construct(string $username, string $message, ?DateTime $date = null)
    {
        $this->username = $username;
        $this->message = $message;
    }

    public function isValid (): bool
    {
        return empty($this->getErrors());
    }

    public function getErrors (): array
    {
        $errors = [];
        if (strlen($this->username) < 3) {
            $errors['username'] = 'Votre pseudo est trop court';
        }
        if (strlen($this->message) < 10) {
            $errors['message'] = 'Votre message est trop court';
        }
        return $errors;
    }

}