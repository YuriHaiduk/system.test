<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\StoreOfferRequest;
use App\Models\Offer;
use App\Models\Tender;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreOfferRequest $request)
    {
        $data = $request->validated();

        $tender = Tender::where('id', $data['tender_id'])->firstOrFail();
        $tenderDeadline = $tender->deadline->format('y-m-d');
        $tenderDeliveryDate = $tender->delivery_date->format('y-m-d');
        $offerDeliveryDate = Carbon::parse($data['delivery_date'])->format('y-m-d');

        if ($offerDeliveryDate > $tenderDeliveryDate || $offerDeliveryDate > $tenderDeadline){

            return back()->withErrors(['msg' => 'Too Late...']);

        }

        Offer::create($data);

        return redirect()->route('offer.index')->with('success', 'Your Offer Has Been Added');
    }
}
