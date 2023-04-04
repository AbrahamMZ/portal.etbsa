<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return File::all('id', 'file_name', 'file_ext', 'file_path')->toArray();
    }

    public function upload(Request $request)
    {
        $archivos = $request->file('archivos');
        $files = new File;
        if (is_array($archivos)) {
            foreach ($archivos as $file) {
                $files->create(
                    [
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_ext' => $file->getClientOriginalExtension(),
                        'file_path' => $file ? $file->store('etbsa-online') : null
                    ]
                );
            }
        }
        return $files->all();
    }

    public function getFile(Request $request, File $file)
    {
        return Storage::response($file->file_path, $file->file_name);
    }

    public function deleteFile(Request $request, File $file)
    {
        return Storage::delete($file->file_path);
    }
}
