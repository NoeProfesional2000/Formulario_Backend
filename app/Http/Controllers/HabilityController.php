<?php

namespace App\Http\Controllers;

use App\Models\Hability;
use Illuminate\Http\Request;

class HabilityController extends Controller
{
    public function index(Request $request)
    {
        $habilities = Hability::orderBy('name', 'ASC')->get();
        return response()->json($habilities);
    }
}
