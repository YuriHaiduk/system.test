<?php

namespace App\Http\Controllers\Tender;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {

        $tender = Tender::where('id', $id)
            ->with(['offers' => function($query) {
                $query->orderByDesc('price')->orderByDesc('quality')->orderByDesc('delivery_date');
            }])
            ->firstOrFail();
        return view('admin.tender.show', compact('tender'));
    }
}
