<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Supplier;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $supplier = Supplier::where('id', $id)->with('services')->firstOrFail();
        $services = Service::pluck('description', 'id')->all();
        return view('admin.supplier.edit', compact('supplier', 'services'));
    }
}
