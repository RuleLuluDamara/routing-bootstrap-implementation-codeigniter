<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index(): string
    {
        return view('/listfood');
    }
    public function showRecommendation(): string
    {
        return view('/personalized');
    }
}
