<?php

namespace App\Service;
use App\Models\Bron;
use Illuminate\Support\Facades\DB;

class AnaliticService
{
    private $analyticsSqlService;

    public function __construct()
    {
        $this->analyticsSqlService = new AnalyticSqlService();
    }

    public function bb(){
        return ["total" =>$this->getStoresCountByPlans()];
    }

    private function getStoresCountByPlans()
    {

        $sql = $this->analyticsSqlService->getQuantitiesSql();

        $quantities = DB::select($sql);

        //foreach ($quantities as $quantity) {
        //    $plans = $quantity->count;
        //}

        return $quantities;
    }
}
