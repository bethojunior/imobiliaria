<?php


namespace App\Repositories\Acquisition;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Acquisition\Acquisition;

class AcquisitionRepository extends AbstractRepository
{
    /**
     * AcquisitionRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(Acquisition::class);
    }

}
