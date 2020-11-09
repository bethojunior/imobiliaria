<?php


namespace App\Services\Cities;


use App\Models\Cities\Cities;
use App\Repositories\Cities\CitiesRepository;
use Illuminate\Support\Facades\DB;

class CitiesService
{
    private $repository;

    /**
     * CitiesService constructor.
     * @param CitiesRepository $repository
     */
    public function __construct(CitiesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->all();
    }

    /**
     * @param array $request
     * @return Cities
     */
    public function insert(array $request)
    {
        $insert = new Cities($request);
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
