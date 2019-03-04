<?php

declare(strict_types=1);

namespace Bloatless\EndocoreApp\Domains;

/**
 * Class HomeDomain
 *
 * This is a very simple domain which is normally used to provide some kind of data for you views.
 *
 * @package Bloatless\EndocoreApp\Domains
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
