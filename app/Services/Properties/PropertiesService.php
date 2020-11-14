<?php


namespace App\Services\Properties;

use App\Constants\SaleConstants;
use App\Models\Properties\ImagesProperties;
use App\Models\Properties\Properties;
use App\Repositories\Properties\ImagePropertyRepository;
use App\Repositories\Properties\PropertiesRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PropertiesService
{
    private $repository;
    private $imageRepository;

    /**
     * PropertiesService constructor.
     * @param PropertiesRepository $propertiesRepository
     * @param ImagePropertyRepository $imageRepository
     */
    public function __construct(PropertiesRepository $propertiesRepository , ImagePropertyRepository $imageRepository)
    {
        $this->repository = $propertiesRepository;
        $this->imageRepository = $imageRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->findall();
    }

    /**
     * @param array $request
     * @return bool|\Exception
     */
    public function insert(array $request)
    {
        $data = [
            'title'  => $request['title'],
            'sub_title'  => $request['sub_title'],
            'description' => $request['description'],
            'acquisition_id' => $request['acquisition_id'],
            'model_id' => $request['model_id'],
            'city_id' => $request['city_id'],
            'neighborhood_id' => $request['neighborhood_id'],
            'address' => $request['address'],
            'location' => $request['location'],
            'value' => $request['value'],
            'value_additional' => $request['value_additional'],
            'status' => SaleConstants::OPEN
        ];
        $properties = new Properties($data);

        $insert = $this->repository->save($properties);

        if (isset($request['images'])) {
            foreach ($request['images'] as $image){
                $filename = Storage::disk('public')->putFile($properties->id, $image);
                $images = [
                    'image' => $filename,
                    'property_id' => $properties->id,
                ];
                $imageTicket = new ImagesProperties($images);
                $this->imageRepository->save($imageTicket);
            }
        }
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
