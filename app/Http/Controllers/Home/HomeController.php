<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Acquisition\AcquisitionService;
use App\Services\Cities\CitiesService;
use App\Services\Models\ModelsService;
use App\Services\Neighborhood\NeighborhoodService;
use App\Services\Properties\PropertiesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $propertiesService;
    private $acquisitionService;
    private $cityService;
    private $neighborhoodService;
    private $modelsService;

    /**
     * HomeController constructor.
     * @param PropertiesService $propertiesService
     * @param AcquisitionService $acquisitionService
     * @param CitiesService $citiesService
     * @param NeighborhoodService $neighborhoodService
     * @param ModelsService $modelsService
     */
    public function __construct(PropertiesService $propertiesService , AcquisitionService $acquisitionService, CitiesService $citiesService , NeighborhoodService $neighborhoodService, ModelsService $modelsService)
    {
        $this->propertiesService = $propertiesService;
        $this->acquisitionService = $acquisitionService;
        $this->cityService = $citiesService;
        $this->neighborhoodService = $neighborhoodService;
        $this->modelsService = $modelsService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $properties = $this->propertiesService
            ->getAll();
        $acquisitions = $this->acquisitionService
            ->getAll();
        $cities = $this->cityService
            ->getAll();
        $neighborhoods = $this->neighborhoodService
            ->getAll();
        $models = $this->modelsService
            ->getAll();
        return view('init.index')->with(['properties' => $properties,'acquisitions' => $acquisitions,'cities' => $cities,'neighborhoods' => $neighborhoods,'models' => $models]);
    }



    public function search(Request $request)
    {
        $properties = $this->propertiesService
            ->searchByFilter($request->all());
        $acquisitions = $this->acquisitionService
            ->getAll();
        $cities = $this->cityService
            ->getAll();
        $neighborhoods = $this->neighborhoodService
            ->getAll();
        $models = $this->modelsService
            ->getAll();
        return view('init.index')->with(['properties' => $properties,'acquisitions' => $acquisitions,'cities' => $cities,'neighborhoods' => $neighborhoods,'models' => $models]);
    }


}
