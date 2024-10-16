<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Ebook;


class EbookController extends Controller
{
    public function index(){
        $ebooks = Ebook::with(['product', 'images'])->get();

        return response()->json([
            'success' => true,
            'ebooks' => $ebooks,
        ]);
    }
}
