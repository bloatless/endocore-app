<?php

declare(strict_types=1);

namespace Bloatless\EndocoreApp\Actions;

use Bloatless\Endocore\Action\JsonAction;
use Bloatless\Endocore\Exception\Application\DatabaseException;
use Bloatless\Endocore\Http\Response;
use Bloatless\EndocoreApp\Domains\MyDatabaseDomain;

/**
 * Class DbDemoAction
 *
 * This is an example of an action which fetches some data from your database and then returns it to the client
 * as JSON encoded string.
 *
 * @package Bloatless\EndocoreApp\Actions
 */
class DbDemoAction extends JsonAction
{
    /**
     * Every Action needs to have a "__invoke" methods which is automatically executed by the application.
     * This methods needs to return the response which will than be send to the client.
     *
     * @param array $arguments Possible arguments from the URL.
     * @return Response
     */
    public function __invoke(array $arguments = []): Response
    {
        try {
            // fetch a customer from database and send data back to client:
            $domain = new MyDatabaseDomain($this->config, $this->logger);
            $customer = $domain->getCustomer(42);
            $this->responder->found(['customer' => $customer]);
        } catch (DatabaseException $e) {
            // log errors and respond with an error message:
            $this->logger->error($e->getMessage());
            $this->responder->error(['Error fetching customer from database.']);
        }
    }
}
