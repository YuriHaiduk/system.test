<?php

namespace App\Http\Controllers\Tender;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tender\StoreTenderRequest;
use App\Models\Tender;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreTenderRequest $request)
    {
        $data = $request->validated();
        Tender::create($data);

        return redirect()->route('tender.index')->with('success', 'Your Tender Has Been Added');
    }
}
