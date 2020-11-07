<?php


namespace App\Http\Controllers\Properties;


use App\Http\Controllers\Controller;
use App\Services\Cities\CitiesService;
use App\Services\Models\ModelsService;
use App\Services\Neighborhood\NeighborhoodService;
use App\Services\Properties\PropertiesService;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    private $service;
    private $citiesService;
    private $neighborhoodService;
    private $modelsService;

    /**
     * PropertiesController constructor.
     * @param PropertiesService $propertiesService
     * @param CitiesService $citiesService
     * @param NeighborhoodService $neighborhoodService
     * @param ModelsService $modelsService
     */
    public function __construct(PropertiesService $propertiesService , CitiesService $citiesService ,
                                NeighborhoodService $neighborhoodService, ModelsService $modelsService)
    {
        $this->service = $propertiesService;
        $this->citiesService = $citiesService;
        $this->neighborhoodService = $neighborhoodService;
        $this->modelsService = $modelsService;

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cities = $this->citiesService->getAll();
        $neighborhoods = $this->neighborhoodService->getAll();
        $models = $this->modelsService->getAll();
        return view('properties.create')->with([
            'cities' => $cities,
            'neighborhoods' => $neighborhoods,
            'models' => $models
        ]);
    }

    public function create(Request $request)
    {
        dd($request->all());
    }

}
