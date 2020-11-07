<?php


namespace App\Services\Properties;

use App\Models\Properties\Properties;
use App\Repositories\Properties\PropertiesRepository;
use Illuminate\Support\Facades\DB;

class PropertiesService
{
    private $repository;

    /**
     * PropertiesService constructor.
     * @param PropertiesRepository $propertiesRepository
     */
    public function __construct(PropertiesRepository $propertiesRepository)
    {
        $this->repository = $propertiesRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->all();
    }

    /**
     * @param array $request
     * @return Properties
     */
    public function insert(array $request)
    {
        $properties = new Properties($request);
        $this->repository->save($properties);
        return $properties;
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * @throws \Exception
     */
    public function delete($id)
    {
        try{
            DB::beginTransaction();
            $result = $this->repository->find($id);
            $result->delete();
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }

        return $result;
    }

}
