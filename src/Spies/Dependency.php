<?php

namespace MockeryTraining\Spies;

class Dependency
{
    public function boolReturn(): bool
    {
        return true;
    }

    public function strReturn(): string
    {
        return 'temp';
    }

    public function arrReturn(): array
    {
        return [
            'first', 'second', 'third'
        ];
    }

    public function voidReturn(): void
    {
    }

    public function printScreen(): void
    {
        echo 'do something';
    }

    public function noReturnType()
    {
        return self::class;
    }
}
