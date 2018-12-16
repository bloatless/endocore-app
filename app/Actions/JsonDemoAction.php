<?php

declare(strict_types=1);

namespace Nekudo\ShinyCoreApp\Actions;

use Nekudo\ShinyCore\Action\JsonAction;
use Nekudo\ShinyCore\Http\Response;

/**
 * Class JsonDemoAction
 *
 * This is an example of a JsonAction. In every action of this type you have access to the JsonResponder object
 * which can be used to send JSON encoded data back to the clint.
 *
 * @package Nekudo\ShinyCoreApp\Actions
 */
class JsonDemoAction extends JsonAction
{
    public function __invoke(array $arguments = []): Response
    {
        // At this point you would normally fetch some data from a domain or service:
        $customers = [
            [
                'id' => 1,
                'firstname' => 'Homer',
                'lastname' => 'Simpson',
            ],
            [
                'id' => 2,
                'firstname' => 'Marge',
                'lastname' => 'Simpson',
            ]
        ];

        // The data than automatically converted to JSON and send back to the client:
        return $this->responder->found($customers);
    }
}
