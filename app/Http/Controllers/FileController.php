<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pizzas;

class FileController extends Controller
{
    public function sendfile(Request $request, $id)
    {
        $file = '../storage/app/public/img/' . $id;
        header("Content-Type: tonatello/file");
        header("Content-Transfer-Encoding: Binary");
        header("Content-Length:" . filesize($file));
        header("Content-Disposition: attachment; filename=$id");
        readfile($file);
        exit;
    }
}
