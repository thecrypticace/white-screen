<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function permissions()
    {
        return view("causes.permissions");
    }

    public function env()
    {
        return view("causes.env");
    }

    public function appKey()
    {
        return view("causes.appKey");
    }

    public function displayErrors()
    {
        return view("causes.displayErrors");
    }

    public function php()
    {
        return view("causes.php");
    }

    public function composer()
    {
        return view("causes.composer");
    }
}
