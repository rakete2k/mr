<?php
/**
 * Created by PhpStorm.
 * User: Privat
 * Date: 14.09.2017
 * Time: 22:46
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController {

    public function upload(Request $request) {
        $files = $request->file('file');
        if (!empty($files)) {
            $file = $request->file('file');
            $file->store('project');
            return $file->hashName();
        }
    }
}