<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file;
        $name = $request->name;

        Storage::put($name, $file);

        return redirect('/');
    }
}
