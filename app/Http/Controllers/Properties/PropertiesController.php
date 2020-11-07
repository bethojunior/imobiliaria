<?php


namespace App\Http\Controllers\Properties;


use App\Http\Controllers\Controller;
use App\Services\Acquisition\AcquisitionService;
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
    private $acquisitionService;

    /**
     * PropertiesController constructor.
     * @param PropertiesService $propertiesService
     * @param CitiesService $citiesService
     * @param NeighborhoodService $neighborhoodService
     * @param ModelsService $modelsService
     * @param AcquisitionService $acquisitionService
     */
    public function __construct(PropertiesService $propertiesService , CitiesService $citiesService ,
                                NeighborhoodService $neighborhoodService, ModelsService $modelsService,
                                AcquisitionService $acquisitionService)
    {
        $this->service = $propertiesService;
        $this->citiesService = $citiesService;
        $this->neighborhoodService = $neighborhoodService;
        $this->modelsService = $modelsService;
        $this->acquisitionService = $acquisitionService;

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cities = $this->citiesService->getAll();
        $neighborhoods = $this->neighborhoodService->getAll();
        $models = $this->modelsService->getAll();
        $acquisitions = $this->acquisitionService->getAll();
        return view('properties.create')->with([
            'cities' => $cities,
            'neighborhoods' => $neighborhoods,
            'models' => $models,
            'acquisitions' => $acquisitions
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        try{
            $insert = $this->service
                ->insert($request->all());
        }catch (\Exception $exception){
            return redirect()->route('properties.list')
                ->with('error', 'Erro ao inserir produto '.$exception->getMessage());
        }
        return redirect()->route('properties.list')
            ->with('success', 'Produto inserido com sucesso');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        $properties = $this->service
            ->getAll();
        return view('properties.index')->with(['properties' => $properties]);
    }

}
