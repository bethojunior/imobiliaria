<?php


namespace App\Http\Controllers\CitiesController;


use App\Http\Controllers\Controller;
use App\Services\Cities\CitiesService;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    private $service;

    /**
     * CitiesController constructor.
     * @param CitiesService $citiesService
     */
    public function __construct(CitiesService $citiesService)
    {
        $this->service = $citiesService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cities = $this->service
            ->getAll();
        return view('cities.index')->with(['cities' => $cities]);
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
            return redirect()->route('home.cities')
                ->with('error', 'Erro ao inserir produto '.$exception->getMessage());
        }
        return redirect()->route('home.cities')
            ->with('success', 'Produto inserido com sucesso');
    }

}
