<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        return view('pages.homepage.index');
    }

    public function behandelingen(): Renderable
    {
        $pedicureprocedures = Treatment::category(Treatment::CATEGORY_PEDICURE)->ordered()->get();

        return view('pages.behandelingen', compact('pedicureprocedures'));
    }

    public function spaArrangementen(): Renderable
    {
        $spaprocedures = Treatment::category(Treatment::CATEGORY_SPA)->ordered()->get();

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
