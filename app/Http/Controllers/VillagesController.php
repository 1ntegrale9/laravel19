<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Village;

class VillagesController extends Controller
{
    public function index()
    {
        $villages = Village::with(['remarks'])->orderBy('created_at', 'desc')->paginate(10);
        return view('villages.index', ['villages' => $villages]);
    }

    public function create()
    {
        return view('villages.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        Village::create($params);

        return redirect()->route('top');
    }

    public function show($village_id)
    {
        $village = Village::findOrFail($village_id);

        return view('villages.show', [
            'village' => $village,
        ]);
    }

    public function edit($village_id)
    {
        $village = Village::findOrFail($village_id);

        return view('villages.edit', [
            'village' => $village,
        ]);
    }

    public function update($village_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        $village = Village::findOrFail($village_id);
        $village->fill($params)->save();

        return redirect()->route('villages.show', ['village' => $village]);
    }

    public function destroy($village_id)
    {
        $village = Village::findOrFail($village_id);

        \DB::transaction(function () use ($village) {
            $village->remarks()->delete();
            $village->delete();
        });

        return redirect()->route('top');
    }
}
