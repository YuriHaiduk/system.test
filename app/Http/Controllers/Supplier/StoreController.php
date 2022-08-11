<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\StoreSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreSupplierRequest $request)
    {
        $data = $request->validated();
        $supplier = Supplier::create($data);
        $supplier->services()->sync($data['services']);

        return redirect()->route('supplier.index')->with('success', 'Some Supplier Has Been Added');
    }
}
