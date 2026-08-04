<?php

namespace Database\Seeders;

use App\Models\PricingTier;
use App\Models\TeamMember;
use App\Models\Treatment;
use Illuminate\Database\Seeder;

class SalonContentSeeder extends Seeder
{
    /**
     * Seed the salon content that used to live in HomeController and the Blade templates.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->treatments() as $treatment) {
            Treatment::updateOrCreate(
                ['category' => $treatment['category'], 'name' => $treatment['name']],
                $treatment
            );
        }

        foreach ($this->teamMembers() as $member) {
            TeamMember::updateOrCreate(['name' => $member['name']], $member);
        }

        foreach ($this->pricingTiers() as $tier) {
            PricingTier::updateOrCreate(['name' => $tier['name']], $tier);
        }
    }

    protected function treatments(): array
    {
        return [
            [
                'category'        => Treatment::CATEGORY_PEDICURE,
                'name'            => 'Pedicurebehandeling',
                'image_path'      => '/assets/pictures/DCM_9932-pichi.png',
                'webp_image_path' => '/assets/pictures/webp/DCM_9932-pichi.webp',
                'position'        => 1,
                'description'     => '
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
                'category'        => Treatment::CATEGORY_PEDICURE,
                'name'            => 'Gespecialiseerde pedicurebehandeling',
                'image_path'      => '/assets/pictures/DF2_2051-pichi.png',
                'webp_image_path' => '/assets/pictures/webp/DF2_2051-pichi.webp',
                'position'        => 2,
                'description'     => 'Mensen kunnen door hun ziektegeschiedenis een verhoogd risico hebben op voetproblemen.<br/><br/>

Voorkomen, op tijd signaleren en behandelen van voetproblemen is belangrijk voor de mobiliteit en kwaliteit van het leven.<br/><br/>

Waar nodig wordt door Edith als Medisch Pedicure samenwerking gezocht met andere disciplines, zoals huisarts, de podotherapeut, fysiotherapeut of orthopedisch schoenmaker.',
            ],
            [
                'category'        => Treatment::CATEGORY_SPA,
                'name'            => 'Klassieke Voet- en onderbeen massage',
                'image_path'      => '/assets/pictures/DCM_9970-pichi.png',
                'webp_image_path' => '/assets/pictures/webp/DCM_9970-pichi.webp',
                'position'        => 1,
                'description'     => 'Deze stevige massage van ongeveer 30 minuten zorgt ervoor dat de spieren in jouw onderbeen en voeten weer soepel aanvoelen.<br/><br/>
Massage geeft nieuwe energie, rust en ontspanning.',
            ],
            [
                'category'        => Treatment::CATEGORY_SPA,
                'name'            => 'Sparkling-arrangement',
                'image_path'      => '/assets/pictures/DCM_9982-pichi.png',
                'webp_image_path' => '/assets/pictures/webp/DCM_9982-pichi.webp',
                'position'        => 2,
                'description'     => 'Een luxe verwenbehandeling samen met een uitverkorene (zus, vriendin, moeder of dochter).<br/><br/>
Koffie/thee/drankje en lekkernijen horen hier natuurlijk bij!',
            ],
            [
                'category'        => Treatment::CATEGORY_SPA,
                'name'            => 'In overleg mogelijk',
                'image_path'      => '/assets/pictures/DF2_2060-pichi.png',
                'webp_image_path' => '/assets/pictures/webp/DF2_2060-pichi.webp',
                'position'        => 3,
                'description'     => '<ul class="content-list">
            <li>Voetbad met Hydro massage</li>
            <li>Scrub-behandeling</li>
            <li>Nagelverzorging</li>
            <li>Voetmassage</li>
            <li>Nagels lakken</li>
</ul>',
            ],
        ];
    }

    protected function teamMembers(): array
    {
        return [
            [
                'name'       => 'Edith Groothuis',
                'role'       => 'Schoonheidsspecialiste',
                'image_path' => '/assets/pictures/DCM_9970-pichi.png',
                'position'   => 1,
            ],
        ];
    }

    protected function pricingTiers(): array
    {
        return [
            [
                'name'        => 'Pedicurebehandeling (standaard)',
                'price_cents' => 4500,
                'position'    => 1,
            ],
            [
                'name'        => 'Pedicurebehandeling (kort)',
                'price_cents' => 3500,
                'position'    => 2,
            ],
            [
                'name'        => 'Spa-arrangement - Klassieke voet- en onderbeenmassage',
                'price_cents' => 4500,
                'position'    => 3,
            ],
            [
                'name'        => 'Spa-arrangement - Klassieke voet- en onderbeenmassage, aansluitend aan een behandeling',
                'price_cents' => 3500,
                'position'    => 4,
            ],
            [
                'name'        => 'Spa-arrangement - Sparkling – p.p.',
                'price_cents' => 7000,
                'position'    => 5,
            ],
        ];
    }
}
