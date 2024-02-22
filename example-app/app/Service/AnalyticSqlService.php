<?php

namespace App\Service;

class AnalyticSqlService
{

    private $connection;

    public function __construct(string $connection = 'mysql')
    {
        $this->connection = config('database.connections.' . $connection . '.database');
    }

    public function getQuantitiesSql(){
        return 'select * from bron';
    }

}
