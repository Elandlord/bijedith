<?php

use App\Treatment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('webp_image');
            $table->timestamps();
        });

        $this->seedExistingContent();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }

    /**
     * Carries over the treatments and spa packages that previously lived as
     * hardcoded arrays in HomeController, so existing content survives the move.
     *
     * @return void
     */
    private function seedExistingContent()
    {
        $rows = [
            [
                'category'    => Treatment::CATEGORY_BEHANDELING,
                'image'       => '/assets/pictures/DCM_9932-pichi.png',
                'webp_image'  => '/assets/pictures/webp/DCM_9932-pichi.webp',
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
                'category'    => Treatment::CATEGORY_BEHANDELING,
                'image'       => '/assets/pictures/DF2_2051-pichi.png',
                'webp_image'  => '/assets/pictures/webp/DF2_2051-pichi.webp',
                'name'        => 'Gespecialiseerde pedicurebehandeling',
                'description' => 'Mensen kunnen door hun ziektegeschiedenis een verhoogd risico hebben op voetproblemen.<br/><br/>

Voorkomen, op tijd signaleren en behandelen van voetproblemen is belangrijk voor de mobiliteit en kwaliteit van het leven.<br/><br/>

Waar nodig wordt door Edith als Medisch Pedicure samenwerking gezocht met andere disciplines, zoals huisarts, de podotherapeut, fysiotherapeut of orthopedisch schoenmaker.',
            ],
            [
                'category'    => Treatment::CATEGORY_SPA,
                'image'       => '/assets/pictures/DCM_9970-pichi.png',
                'webp_image'  => '/assets/pictures/webp/DCM_9970-pichi.webp',
                'name'        => 'Klassieke Voet- en onderbeen massage',
                'description' => 'Deze stevige massage van ongeveer 30 minuten zorgt ervoor dat de spieren in jouw onderbeen en voeten weer soepel aanvoelen.<br/><br/>
Massage geeft nieuwe energie, rust en ontspanning.',
            ],
            [
                'category'    => Treatment::CATEGORY_SPA,
                'image'       => '/assets/pictures/DCM_9982-pichi.png',
                'webp_image'  => '/assets/pictures/webp/DCM_9982-pichi.webp',
                'name'        => 'Sparkling-arrangement',
                'description' => 'Een luxe verwenbehandeling samen met een uitverkorene (zus, vriendin, moeder of dochter).<br/><br/>
Koffie/thee/drankje en lekkernijen horen hier natuurlijk bij!',
            ],
            [
                'category'    => Treatment::CATEGORY_SPA,
                'image'       => '/assets/pictures/DF2_2060-pichi.png',
                'webp_image'  => '/assets/pictures/webp/DF2_2060-pichi.webp',
                'name'        => 'In overleg mogelijk',
                'description' => '<ul class="content-list">
            <li>Voetbad met Hydro massage</li>
            <li>Scrub-behandeling</li>
            <li>Nagelverzorging</li>
            <li>Voetmassage</li>
            <li>Nagels lakken</li>
</ul>',
            ],
        ];

        foreach ($rows as $row) {
            Treatment::create($row);
        }
    }
};
