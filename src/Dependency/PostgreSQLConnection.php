<?php

namespace Solid\Conceptual\Dependency;

class PostgreSQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return "PostgreSQLConnection...!";
    }
}