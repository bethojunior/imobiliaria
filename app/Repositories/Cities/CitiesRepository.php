<?php


namespace App\Repositories\Cities;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Cities\Cities;

class CitiesRepository extends AbstractRepository
{
    /**
     * CitiesRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(Cities::class);
    }

}
