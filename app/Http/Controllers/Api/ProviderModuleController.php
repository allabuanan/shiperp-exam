<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProviderModule;

class ProviderModuleController extends Controller
{
    public function index() {
        $modules = ProviderModule::all();
        
        return response()->json([
            "success" => true,
            "message" => "Provider Modules List",
            'modules' => $modules
        ]);
    }
}
