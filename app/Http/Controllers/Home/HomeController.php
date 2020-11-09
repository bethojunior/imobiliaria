<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Acquisition\AcquisitionService;
use App\Services\Properties\PropertiesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $propertiesService;
    private $acquisitionService;

    /**
     * HomeController constructor.
     * @param PropertiesService $propertiesService
     * @param AcquisitionService $acquisitionService
     */
    public function __construct(PropertiesService $propertiesService , AcquisitionService $acquisitionService)
    {
        $this->propertiesService = $propertiesService;
        $this->acquisitionService = $acquisitionService;
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
        return view('init.index')->with(['properties' => $properties,'acquisitions' => $acquisitions]);
    }


}
