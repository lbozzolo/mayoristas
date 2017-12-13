<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{

    public function __construct()
    {
        $navbar = Continente::get(['id', 'nombre']);
        View::share('navbar', $navbar);
    }
}
