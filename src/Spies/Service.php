<?php

namespace MockeryTraining\Spies;

class Service
{
    public function __construct(
        public Dependency $dependency
    ) {
    }

    public function dependencyResult(): array
    {
        $result = [
            'booleanValue' => $this->dependency->boolReturn(),
            'stringValue' => $this->dependency->strReturn(),
            'arrayValue' => $this->dependency->arrReturn(),
            'voidValue' => $this->dependency->voidReturn(),
            'noReturnType' => $this->dependency->noReturnType(),
        ];

        $this->dependency->printScreen();

        return $result;
    }
}
