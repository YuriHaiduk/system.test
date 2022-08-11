<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\UpdateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateSupplierRequest $request, $id)
    {
        $data = $request->validated();
        $supplier = Supplier::where('id', $id)->firstOrFail();
        $supplier->update($data);
        $supplier->services()->sync($data['services']);
        return redirect()->route('supplier.show', ['id' => $id])->with('success', 'Your Supplier Has Been Updated');
    }
}
