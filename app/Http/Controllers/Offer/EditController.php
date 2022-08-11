<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Supplier;
use App\Models\Tender;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $offer = Offer::where('id', $id)->firstOrFail();
        $tenders = Tender::pluck('description', 'id')->all();
        $suppliers = Supplier::pluck('name', 'id')->all();
        return view('admin.offer.edit', compact('tenders', 'suppliers', 'offer'));
    }
}
