<?php

namespace Solid\Conceptual\Dependency;

class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return "MySQLConnection...!";
    }
}