<?php

namespace Massy\Math\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MathController extends Controller
{
    public function add($a, $b){
        return $a + $b;
    }

    public function subtract($a, $b){
        return $a - $b;
    }
}
