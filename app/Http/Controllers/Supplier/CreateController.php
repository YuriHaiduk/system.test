<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $services = Service::pluck('description', 'id')->all();
        return view('admin.supplier.create', compact('services'));
    }
}
