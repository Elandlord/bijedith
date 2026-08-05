<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Treatment;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        $testimonials = Testimonial::approved()->latest('approved_at')->get();

        return view('pages.homepage.index', compact('testimonials'));
    }

    public function behandelingen(): Renderable
    {
        $pedicureprocedures = Treatment::where('type', 'pedicure')->get();

        return view('pages.behandelingen', compact('pedicureprocedures'));
    }

    public function spaArrangementen(): Renderable
    {
        $spaprocedures = Treatment::where('type', 'spa')->get();

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
