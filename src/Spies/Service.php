<?php

namespace MockeryTraining\Spies;

class Service
{
    public function __construct(
        public Dependency $dependency
    ){}
}