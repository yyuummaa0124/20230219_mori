<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index( $text = "建物です")
    {
        return $text;
    }

    public function room($room)
    {
        return   "部屋番号は" . $room ."です";
    }
}
