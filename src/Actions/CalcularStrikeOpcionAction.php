<?php

namespace Cirote\Opciones\Actions;

class CalcularStrikeOpcionAction
{
    public function execute(string $ticker): float
    {
        return (float) substr($ticker, 4, 4);
    }

    public function __invoke(string $ticker): float
    {
        return $this->execute($ticker);
    }
}
