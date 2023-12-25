<?php

class passenger extends User
{
    private $passport_img;
    private $photo;

    // Additional methods specific to passengers

    public function setPassportImg($passport_img)
    {
        $this->passport_img = $passport_img;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    // ... Other passenger-specific methods ...
}

?>