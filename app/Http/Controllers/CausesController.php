<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function permissions()
    {
        return $this->tweetOne();
    }

    public function env()
    {
        return $this->tweetOne();
    }

    public function appKey()
    {
        return $this->tweetOne();
    }

    public function displayErrors()
    {
        return $this->tweetTwo();
    }

    public function php()
    {
        return $this->tweetTwo();
    }

    public function composer()
    {
        return $this->tweetTwo();
    }

    private function tweetOne()
    {
        return redirect("https://twitter.com/fideloper/status/879775717067812865");
    }

    private function tweetTwo()
    {
        return redirect("https://twitter.com/fideloper/status/879829008971685889");
    }
}
