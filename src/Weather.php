<?php

namespace MockeryTraining;

class Weather
{
    public $sun;

    public function __construct()
    {
        $this->sun = new Sun();
    }

    public function status(): string
    {
        return 'fairy good';
    }
}
