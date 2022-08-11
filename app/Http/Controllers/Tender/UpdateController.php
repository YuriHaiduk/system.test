<?php

namespace App\Http\Controllers\Tender;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tender\UpdateTenderRequest;
use App\Models\Tender;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateTenderRequest $request, $id)
    {
        $data = $request->validated();
        $tender = Tender::where('id', $id)->firstOrFail();
        $tender->update($data);
        return redirect()->route('tender.show', ['id' => $id])->with('success', 'Your Tender Has Been Updated');

    }
}
