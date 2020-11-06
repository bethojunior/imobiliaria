<?php


namespace App\Repositories\Neighborhood;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Neighborhood\Neighborhood;

class NeighborhoodRepository extends AbstractRepository
{
    /**
     * NeighborhoodRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(Neighborhood::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findAll()
    {
        return $this->getModel()
            ::with('city')
            ->get();
    }

}
