<?php


namespace App\Http\Controllers\Models;


use App\Http\Controllers\Controller;
use App\Services\Cities\CitiesService;
use App\Services\Models\ModelsService;
use Illuminate\Http\Request;

class ModelsController extends Controller
{

    private $service;

    /**
     * ModelsController constructor.
     * @param ModelsService $modelsService
     */
    public function __construct(ModelsService $modelsService)
    {
        $this->service = $modelsService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $models = $this->service
            ->getAll();
        return view('models.index')->with(['models' => $models]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        try{
            $this->service
                ->insert($request->all());
        }catch (\Exception $exception){
            return redirect()->route('models.index')
                ->with('error', 'Erro ao inserir modelo '.$exception->getMessage());
        }
        return redirect()->route('models.index')
            ->with('success', 'Modelo inserido com sucesso');
    }

}
