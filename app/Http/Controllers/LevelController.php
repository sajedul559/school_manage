<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Jambasangsang\Service\Levels\LevelService;


class LevelController extends Controller
{

    public function index(): View
    {
        return view('admins.levels.index', ['levels' => Level::get()]);
    }


    public function create(): View
    {
        return view('admins.levels.create');
    }


    public function store(Request $request, LevelService $levelService): RedirectResponse
    {
      
        $this->validated($request);
        $levelService->storeLevelData( new Level(), $request);
        return redirect()->route('levels.index')->with('message','Data added Successfully');;
    }


    public function show(Level $level): View
    {
        return view('admins.levels.show', compact('level'));
    }

    public function edit(Level $level): View
    {
        return view('admins.levels.edit', compact('level'));
    }


    public function update(Request $request, Level $level): RedirectResponse
    {
        return redirect()->route('levels.index');
    }


    public function destroy(Level $level, LevelService $levelService): RedirectResponse
    {
        $levelService->deleteLevelData($level );
        return redirect()->route('levels.index')->with('message','Data added Successfully');
    }
    

    protected function validated($request)
    {
        return $this->validate($request,[
            'level_name' => 'required| min:10',
            'level_status' => 'required|min:1',
            'description' =>  'nullable|max:200'
        ]);
    }
}

