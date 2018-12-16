<?php

declare(strict_types=1);

namespace Nekudo\ShinyCoreApp\Domains;

use Nekudo\ShinyCore\Domain\DatabaseDomain;

/**
 * Class MyDatabaseDomain
 *
 * This is an example of a database domain. Database domains have access to the QueryBuilder factory and can be
 * used to access MySQL databases.
 *
 * @package Nekudo\ShinyCoreApp\Domains
 */
class MyDatabaseDomain extends DatabaseDomain
{
    /**
     * This method executes a simple select query and returns the data.
     *
     * @param int $id
     * @return \stdClass
     * @throws \Nekudo\ShinyCore\Exception\Application\DatabaseException
     */
    public function getCustomer(int $id): \stdClass
    {
        $result = $this->db->makeSelect()
            ->from('customers')
            ->whereEquals('customer_id', $id)
            ->first();

        return $result;
    }

    /**
     * This is an example of a method to update data in your database.
     *
     * @param int $id
     * @param array $data
     * @throws \Nekudo\ShinyCore\Exception\Application\DatabaseException
     * @return void
     */
    public function updateCusomer(int $id, array $data): void
    {
        $this->db->makeUpdate()
            ->table('customers')
            ->whereEquals('id', $id)
            ->update($data);
    }
}
