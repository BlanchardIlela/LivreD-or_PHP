<?php
require_once 'Message.php';

class GuestBook {

    public function __construct(string $file)
    {
       $directory = dirname($file);
       if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
       }
       if (!file_exists($file)) {
            touch($file);
       }
    }

    public function addMessage(Message $message)
    {
        
    }

}