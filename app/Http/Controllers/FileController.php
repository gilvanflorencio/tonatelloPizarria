<?php

namespace App\Http\Controllers;
use App\Model\Pizzas;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function sendfile(Request $request, $id)
    {
        $file = '../storage/app/public/img/' . $id;
        header("Content-Type: TonatelloPizzaria/file");
        header("Content-Transfer-Encoding: Binary");
        header("Content-Length:" . filesize($file));
        header("Content-Disposition: attachment; filename=$id");
        readfile($file);
        exit;
    }
}
