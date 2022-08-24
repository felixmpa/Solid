<?php

namespace Solid\Conceptual\Dependency;

class QueryBuilder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function query()
    {
        return [
            $this->dbConnection->connect(),
            'Querying...!'
        ];
    }
}