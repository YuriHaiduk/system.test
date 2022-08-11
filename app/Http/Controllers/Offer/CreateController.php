<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Models\Tender;
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
        $tenders = Tender::pluck('description', 'id')->all();
        $suppliers = Supplier::pluck('name', 'id')->all();
        return view('admin.offer.create', compact('tenders', 'suppliers'));
    }
}
