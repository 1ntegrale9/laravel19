<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;

class RemarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'village_id' => 'required|exists:villages,id',
            'body' => 'required|max:2000',
        ]);

        $village = Village::findOrFail($params['village_id']);
        $village->remarks()->create($params);

        return redirect()->route('villages.show', ['village' => $village]);
    }
}
