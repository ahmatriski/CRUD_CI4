<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        return view('vw_form');
    }
    public function bio ()
    {
        return view('vw_biodata');
    }
}                                                                                    