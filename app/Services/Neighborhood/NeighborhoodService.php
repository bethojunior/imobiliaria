<?php


namespace App\Services\Neighborhood;


use App\Models\Neighborhood\Neighborhood;
use App\Repositories\Cities\CitiesRepository;
use App\Repositories\Neighborhood\NeighborhoodRepository;
use Illuminate\Support\Facades\DB;

class NeighborhoodService
{
    private $repository;

    /**
     * CitiesService constructor.
     * @param CitiesRepository $repository
     */
    public function __construct(NeighborhoodRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->findAll();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findall(){
        return $this->repository->all();
    }

    /**
     * @param array $request
     * @return Neighborhood
     */
    public function insert(array $request)
    {
        $insert = new Neighborhood($request);
        $this->repository->save($insert);
        return $insert;
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
