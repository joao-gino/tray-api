<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSaleRequest;
use App\Models\Sale;

class SaleController extends Controller
{
    private const COMISSION = 0.085;

    public function store(CreateSaleRequest $request)
    {
        $comission = $request->value * self::COMISSION;

        $sale = Sale::create([
            'seller_id' => $request->seller_id,
            'value' => $request->value,
            'comission' => $comission,
        ]);

        return response()->json($sale, 201);
    }
}
