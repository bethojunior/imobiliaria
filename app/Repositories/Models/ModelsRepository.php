<?php


namespace App\Repositories\Models;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Models\Models;

class ModelsRepository extends AbstractRepository
{
    /**
     * ModelsRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(Models::class);
    }

}
