<?php


namespace App\Http\Controllers\Neighborhood;


use App\Http\Controllers\Controller;
use App\Services\Cities\CitiesService;
use App\Services\Neighborhood\NeighborhoodService;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    private $service;
    private $citiesService;

    /**
     * NeighborhoodController constructor.
     * @param NeighborhoodService $neighborhoodService
     * @param CitiesService $citiesService
     */
    public function __construct(NeighborhoodService $neighborhoodService , CitiesService $citiesService)
    {
        $this->service = $neighborhoodService;
        $this->citiesService = $citiesService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $neighborhoods = $this->service
            ->getAll();
        $cities = $this->citiesService
            ->getAll();
        return view('neighborhood.index')->with(['neighborhoods' => $neighborhoods,'cities' => $cities]);
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
            return redirect()->route('home.neighborhood')
                ->with('error', 'Erro ao inserir produto '.$exception->getMessage());
        }
        return redirect()->route('home.neighborhood')
            ->with('success', 'Produto inserido com sucesso');
    }
}
