<?php


namespace App\Repositories\Properties;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Properties\Properties;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class PropertiesRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Properties::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findall()
    {
        return $this->getModel()
            ::with('city')
            ->with('acquisition')
            ->with('neighborhood')
            ->with('model')
            ->with('images')
//            ->groupBy('acquisition_id')
            ->get();
    }
}
