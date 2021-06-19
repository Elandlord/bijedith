<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pedicureprocedures = collect([
            0 => [
                'img'           => '/assets/pictures/DCM_9932-pichi.png',
                'name'          => 'Pedicurebehandeling',
                'description'   => '
            <ul>
                <li>Wassen en desinfecteren van de voeten voor optimale hygiëne</li>
                <li>Knippen van de nagels</li>
                <li>De verzorging van de nagels en de nagelomgeving</li>
                <li>Het verwijderen van overtollig eelt</li>
                <li>Het verwijderen van likdoorns</li>
                <li>De behandeling van kloven</li>
                <li>De behandeling van schimmelnagels en ingroeiende nagels</li>
                <li>Verzorgen van de voeten met voedende crème</li>
            </ul>',
                'url' => '/#tarieven',
            ],
            1 => [
                'img'           => '/assets/pictures/DF2_2051-pichi.png',
                'name'          => 'Gespecialiseerde pedicurebehandeling',
                'description'   => 'Mensen kunnen door hun ziektegeschiedenis een verhoogd risico hebben op voetproblemen.<br/><br/>

Voorkomen, op tijd signaleren en behandelen van voetproblemen is belangrijk voor de mobiliteit en kwaliteit van het leven.<br/><br/>

Waar nodig wordt door Edith als Medisch Pedicure samenwerking gezocht met andere disciplines, zoals huisarts, de podotherapeut, fysiotherapeut of orthopedisch schoenmaker.',
                'url' => '/#tarieven'
            ],
        ]);

        $spaprocedures = collect([
            0 => [
                'img'           => '/assets/pictures/DCM_9970-pichi.png',
                'name'          => 'Klassieke Voet- en onderbeen massage',
                'description'   => 'Deze stevige massage van ongeveer 30 minuten zorgt ervoor dat de spieren in jouw onderbeen en voeten weer soepel aanvoelen.<br/><br/>
Massage geeft nieuwe energie, rust en ontspanning.'
            ],
            1 => [
                'img'           => '/assets/pictures/DCM_9982-pichi.png',
                'name'          => 'Sparkling-arrangement',
                'description'   => 'Een luxe verwenbehandeling samen met een uitverkorene (zus, vriendin, moeder of dochter).<br/><br/>
Koffie/thee/drankje en lekkernijen horen hier natuurlijk bij!'
            ],
            2 => [
                'img'           => '/assets/pictures/DF2_2060-pichi.png',
                'name'          => 'In overleg mogelijk',
                'description'   => '<ul>
            <li>Voetbad met Hydro massage</li>
            <li>Scrub-behandeling</li>
            <li>Nagelverzorging</li>
            <li>Voetmassage</li>
            <li>Nagels lakken</li>
</ul>'
            ],
        ]);

        return view('pages.homepage.index', compact('spaprocedures', 'pedicureprocedures'));
    }
}
