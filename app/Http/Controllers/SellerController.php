<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSellerRequest;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index()
    {
        return response()->json(Seller::all());
    }

    public function store(CreateSellerRequest $request)
    {
        $seller = Seller::create($request->all());

        return response()->json($seller, 201);
    }

    public function sales($seller_id)
    {
        $seller = Seller::findOrFail($seller_id);

        return response()->json($seller->sales);
    }
}
