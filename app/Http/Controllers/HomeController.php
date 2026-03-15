<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        return view('pages.homepage.index');
    }

    public function behandelingen(): Renderable
    {
        $pedicureprocedures = collect([
            [
                'img'         => '/assets/pictures/DCM_9932-pichi.png',
                'webp_img'    => '/assets/pictures/webp/DCM_9932-pichi.webp',
                'name'        => 'Pedicurebehandeling',
                'description' => '
            <ul class="content-list">
                <li>Wassen en desinfecteren van de voeten voor optimale hygiëne</li>
                <li>Knippen van de nagels</li>
                <li>De verzorging van de nagels en de nagelomgeving</li>
                <li>Het verwijderen van overtollig eelt</li>
                <li>Het verwijderen van likdoorns</li>
                <li>De behandeling van kloven</li>
                <li>De behandeling van schimmelnagels en ingroeiende nagels</li>
                <li>Verzorgen van de voeten met voedende crème</li>
            </ul>',
            ],
            [
                'img'         => '/assets/pictures/DF2_2051-pichi.png',
                'webp_img'    => '/assets/pictures/webp/DF2_2051-pichi.webp',
                'name'        => 'Gespecialiseerde pedicurebehandeling',
                'description' => 'Mensen kunnen door hun ziektegeschiedenis een verhoogd risico hebben op voetproblemen.<br/><br/>

Voorkomen, op tijd signaleren en behandelen van voetproblemen is belangrijk voor de mobiliteit en kwaliteit van het leven.<br/><br/>

Waar nodig wordt door Edith als Medisch Pedicure samenwerking gezocht met andere disciplines, zoals huisarts, de podotherapeut, fysiotherapeut of orthopedisch schoenmaker.',
            ],
        ]);

        return view('pages.behandelingen', compact('pedicureprocedures'));
    }

    public function spaArrangementen(): Renderable
    {
        $spaprocedures = collect([
            [
                'img'         => '/assets/pictures/DCM_9970-pichi.png',
                'webp_img'    => '/assets/pictures/webp/DCM_9970-pichi.webp',
                'name'        => 'Klassieke Voet- en onderbeen massage',
                'description' => 'Deze stevige massage van ongeveer 30 minuten zorgt ervoor dat de spieren in jouw onderbeen en voeten weer soepel aanvoelen.<br/><br/>
Massage geeft nieuwe energie, rust en ontspanning.',
            ],
            [
                'img'         => '/assets/pictures/DCM_9982-pichi.png',
                'webp_img'    => '/assets/pictures/webp/DCM_9982-pichi.webp',
                'name'        => 'Sparkling-arrangement',
                'description' => 'Een luxe verwenbehandeling samen met een uitverkorene (zus, vriendin, moeder of dochter).<br/><br/>
Koffie/thee/drankje en lekkernijen horen hier natuurlijk bij!',
            ],
            [
                'img'         => '/assets/pictures/DF2_2060-pichi.png',
                'webp_img'    => '/assets/pictures/webp/DF2_2060-pichi.webp',
                'name'        => 'In overleg mogelijk',
                'description' => '<ul class="content-list">
            <li>Voetbad met Hydro massage</li>
            <li>Scrub-behandeling</li>
            <li>Nagelverzorging</li>
            <li>Voetmassage</li>
            <li>Nagels lakken</li>
</ul>',
            ],
        ]);

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
