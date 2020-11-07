<?php


namespace App\Repositories\Properties;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Properties\Properties;

class PropertiesRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Properties::class);
    }
}
