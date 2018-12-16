<?php

declare(strict_types=1);

namespace Nekudo\ShinyCoreApp\Domains;

/**
 * Class HomeDomain
 *
 * This is a very simple domain which is normally used to provide some kind of data for you views.
 *
 * @package Nekudo\ShinyCoreApp\Domains
 */
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
