<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        return view('pages.homepage.index');
    }

    public function behandelingen(): Renderable
    {
        $pedicureprocedures = Treatment::where('category', Treatment::CATEGORY_BEHANDELING)
            ->orderBy('id')
            ->get();

        return view('pages.behandelingen', compact('pedicureprocedures'));
    }

    public function spaArrangementen(): Renderable
    {
        $spaprocedures = Treatment::where('category', Treatment::CATEGORY_SPA)
            ->orderBy('id')
            ->get();

        return view('pages.spa-arrangementen', compact('spaprocedures'));
    }

    public function tarieven(): Renderable
    {
        return view('pages.tarieven');
    }

    public function contact(): Renderable
    {
        return view('pages.contact');
    }
}
