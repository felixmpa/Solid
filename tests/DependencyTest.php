<?php

namespace Solid\Conceptual\Tests;

use PHPUnit\Framework\TestCase;
use Solid\Conceptual\Dependency\MySQLConnection;
use Solid\Conceptual\Dependency\PostgreSQLConnection;
use Solid\Conceptual\Dependency\QueryBuilder;

final class DependencyTest extends TestCase
{   
    public function testMySQLConnection() 
    {          
        $db = new MySQLConnection();
        $builder = new QueryBuilder($db);
        $this->assertContains("MySQLConnection...!", $builder->query());
    }

    public function testPostgreSQLConnection() 
    {          
        $db = new PostgreSQLConnection();
        $builder = new QueryBuilder($db);
        $this->assertContains("PostgreSQLConnection...!", $builder->query());
    }
}