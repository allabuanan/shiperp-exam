<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProviderModule;

class ProviderModuleController extends Controller
{
    public function index() {
        $modules = ProviderModule::orderBy('id', 'desc')->get();
        return view('welcome', ['modules' => $modules]);
    } 

    public function store(Request $request) {
        $request -> validate([
            'providerName' => 'required',
            'url' => 'required'
        ]);

        $module = new ProviderModule;
        $module->providerName = $request->providerName;
        $module->url = $request->url;
        $module->save();

        return redirect()->route('home')->with('success', 'New provider module has been created successfully.');
    }

    public function show(ProviderModule $providerModule) {
        
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'providerName' => 'required',
            'url' => 'required'
        ]);

        $module = ProviderModule::find($id);
        $module->providerName = $request->providerName;
        $module->url = $request->url;
        $module->save();

        return redirect()->route('home')->with('success', 'Provider module has been updated successfully.');
    }

    public function destroy(ProviderModule $providerModule) {
        $providerModule->delete();
        return redirect()->route('home')->with('success', 'Provider module has been deleted successfully.');
    }
    

}
