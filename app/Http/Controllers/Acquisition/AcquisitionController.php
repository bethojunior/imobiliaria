<?php


namespace App\Http\Controllers\Acquisition;


use App\Http\Controllers\Controller;
use App\Services\Acquisition\AcquisitionService;
use App\Services\Models\ModelsService;
use Illuminate\Http\Request;

class AcquisitionController extends Controller
{

    private $service;

    /**
     * AcquisitionController constructor.
     * @param AcquisitionService $acquisitionService
     */
    public function __construct(AcquisitionService $acquisitionService)
    {
        $this->service = $acquisitionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $acquisitions = $this->service
            ->getAll();
        return view('acquisition.index')->with(['acquisitions' => $acquisitions]);
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
            return redirect()->route('acquisition.index')
                ->with('error', 'Erro ao inserir'.$exception->getMessage());
        }
        return redirect()->route('acquisition.index')
            ->with('success', 'Inserido com sucesso');
    }
}
