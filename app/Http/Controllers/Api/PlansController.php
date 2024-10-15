<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Plan;

class PlansController extends Controller
{
    public function index(){
        $plans = Plan::with('product')->get();

        return response()->json([
            'success' => true,
            'plans' => $plans,
        ]);
    }
}
