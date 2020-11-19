<?php


namespace App\Repositories\Properties;


use App\Constants\SaleConstants;
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
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findall($status = SaleConstants::OPEN)
    {
        return $this->getModel()
            ::with('city')
            ->with('acquisition')
            ->with('neighborhood')
            ->with('model')
            ->with('images')
            ->where('status','=',$status)
            ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function findById($id)
    {
        return $this->getModel()
            ::with('city')
            ->with('acquisition')
            ->with('neighborhood')
            ->with('model')
            ->with('images')
            ->where('id','=',$id)
            ->first();
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function searchByFilter(array $data)
    {
        return $this->getModel()
            ::with('city')
            ->with('acquisition')
            ->with('neighborhood')
            ->with('model')
            ->with('images')
            ->where('model_id','=',$data['model_id'])
            ->where('acquisition_id','=',$data['acquisition_id'])
            ->where('city_id','=',$data['city_id'])
            ->where('neighborhood_id','=',$data['neighborhood_id'])
            ->get();
    }
}
