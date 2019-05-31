<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Inhabitant;
use App\Village;

class InhabitantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $village_id = $request->village_id;
        $inhabitant = new Inhabitant;
        $inhabitant->fill([
            'user_id' => Auth::id(),
            'village_id' => $village_id,
        ])->save();

        $village = Village::findOrFail($request->village_id);
        return redirect()->route('villages.show', ['village' => $village]);
    }

    public function destroy(Request $request)
    {
        $village_id = $request->village_id;
        Inhabitant::where('village_id', $village_id)->where('user_id', Auth::id())->delete();
        $village = Village::findOrFail($village_id);
        return redirect()->route('villages.show', ['village' => $village]);
    }
}
