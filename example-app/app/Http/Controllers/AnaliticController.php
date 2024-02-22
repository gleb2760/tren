<?php

namespace App\Http\Controllers;

use App\Service\AnaliticService;

use Illuminate\Http\Request;

class AnaliticController extends Controller
{
    /**
     * @var Request
     */
    public $request;
    public $analyticService;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->analyticService = new AnaliticService();
    }

    public function dashboard ( AnaliticService $service) {
        $quantities = $service->bb();
        return $quantities;
    }
}
