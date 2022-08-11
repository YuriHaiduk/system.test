<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\UpdateOfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateOfferRequest $request, $id)
    {
        $data = $request->validated();
        $supplier = Offer::where('id', $id)->firstOrFail();
        $supplier->update($data);
        return redirect()->route('offer.show', ['id' => $id])->with('success', 'Your Offer Has Been Updated');
    }
}
