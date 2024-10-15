<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();

        return response()->json([
            'success' => true,
            'testimonials' => $testimonials,
        ]);
    }
}
