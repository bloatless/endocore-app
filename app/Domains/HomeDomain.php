<?php

namespace Nekudo\ShinyCoreApp\Domains;

class HomeDomain
{
    /**
     * Retrieves a name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $_SERVER['USER'] ?? 'Stranger';
    }
}
