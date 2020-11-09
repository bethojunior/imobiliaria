<?php


namespace App\Services\Models;


use App\Models\Models\Models;
use App\Repositories\Models\ModelsRepository;
use Illuminate\Support\Facades\DB;

class ModelsService
{

    private $repository;

    /**
     * ModelsService constructor.
     * @param Models $repository
     */
    public function __construct(ModelsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Models[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll(){
        return $this->repository->all();
    }

    /**
     * @param array $request
     * @return Models
     */
    public function insert(array $request)
    {
        $models = new Models($request);
        $this->repository->save($models);
        return $models;
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
