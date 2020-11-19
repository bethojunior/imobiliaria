<?php


namespace App\Services\Acquisition;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Acquisition\Acquisition;
use App\Repositories\Acquisition\AcquisitionRepository;
use Illuminate\Support\Facades\DB;

class AcquisitionService
{
    private $repository;

    /**
     * AcquisitionService constructor.
     * @param AcquisitionRepository $acquisitionRepository
     */
    public function __construct(AcquisitionRepository $acquisitionRepository)
    {
        $this->repository = $acquisitionRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->all();
    }

    /**
     * @param array $request
     * @return Acquisition
     */
    public function insert(array $request)
    {
        $acquisition = new Acquisition($request);
        $this->repository->save($acquisition);
        return $acquisition;
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

    /**
     * @param array $data
     */
    public function filter(array $data)
    {

    }
}
