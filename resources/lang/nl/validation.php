<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute moet geaccepteerd worden.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum zijn na :date.',
    'after_or_equal' => ':attribute moet een datum zijn op of na :date.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, nummers, streepjes en underscores bevatten.',
    'alpha_num' => ':attribute mag alleen letters en nummers bevatten.',
    'array' => ':attribute moet een array zijn.',
    'before' => ':attribute moet een datum zijn voor :date.',
    'before_or_equal' => ':attribute moet een datum zijn op of voor :date.',
    'between' => [
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string' => ':attribute moet tussen :min en :max karakters zijn.',
        'array' => ':attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => ':attribute moet waar of onwaar zijn.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'date' => ':attribute is geen geldige datum.',
    'date_equals' => ':attribute moet een datum zijn gelijk aan :date.',
    'date_format' => ':attribute komt niet overeen met het formaat :format.',
    'different' => ':attribute en :other moeten verschillend zijn.',
    'digits' => ':attribute moet :digits cijfers bevatten.',
    'digits_between' => ':attribute moet tussen de :min en :max cijfers bevatten.',
    'dimensions' => ':attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => ':attribute bevat een dubbele waarde.',
    'email' => ':attribute moet een geldig e-mailadres zijn.',
    'ends_with' => ':attribute moet eindigen met een van de volgende waarden: :values.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute moet een waarde bevatten.',
    'gt' => [
        'numeric' => ':attribute moet groter zijn dan :value.',
        'file' => ':attribute moet groter zijn dan :value kilobytes.',
        'string' => ':attribute moet groter zijn dan :value karakters.',
        'array' => ':attribute moet meer dan :value items bevatten.',
    ],
    'gte' => [
        'numeric' => ':attribute moet groter dan of gelijk zijn aan :value.',
        'file' => ':attribute moet groter dan of gelijk zijn aan :value kilobytes.',
        'string' => ':attribute moet groter dan of gelijk zijn aan :value karakters.',
        'array' => ':attribute moet :value items of meer bevatten.',
    ],
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => ':attribute bestaat niet in :other.',
    'integer' => ':attribute moet een geheel getal zijn.',
    'ip' => ':attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':attribute moet een geldig IPv6-adres zijn.',
    'json' => ':attribute moet een geldige JSON-tekenreeks zijn.',
    'lt' => [
        'numeric' => ':attribute moet kleiner zijn dan :value.',
        'file' => ':attribute moet kleiner zijn dan :value kilobytes.',
        'string' => ':attribute moet kleiner zijn dan :value karakters.',
        'array' => ':attribute moet minder dan :value items bevatten.',
    ],
    'lte' => [
        'numeric' => ':attribute moet kleiner dan of gelijk zijn aan :value.',
        'file' => ':attribute moet kleiner dan of gelijk zijn aan :value kilobytes.',
        'string' => ':attribute moet kleiner dan of gelijk zijn aan :value karakters.',
        'array' => ':attribute mag niet meer dan :value items bevatten.',
    ],
    'max' => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file' => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string' => ':attribute mag niet groter zijn dan :max karakters.',
        'array' => ':attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => ':attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => ':attribute moet minimaal :min zijn.',
        'file' => ':attribute moet minimaal :min kilobytes zijn.',
        'string' => ':attribute moet minimaal :min karakters bevatten.',
        'array' => ':attribute moet minimaal :min items bevatten.',
    ],
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => ':attribute formaat is ongeldig.',
    'numeric' => ':attribute moet een getal zijn.',
    'password' => 'Het wachtwoord is onjuist.',
    'present' => ':attribute moet aanwezig zijn.',
    'regex' => ':attribute formaat is ongeldig.',
    'required' => ':attribute is verplicht.',
    'required_if' => ':attribute is verplicht wanneer :other :value is.',
    'required_unless' => ':attribute is verplicht tenzij :other in :values is.',
    'required_with' => ':attribute is verplicht wanneer :values aanwezig is.',
    'required_with_all' => ':attribute is verplicht wanneer :values aanwezig zijn.',
    'required_without' => ':attribute is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => ':attribute is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => ':attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ':attribute moet :size zijn.',
        'file' => ':attribute moet :size kilobytes zijn.',
        'string' => ':attribute moet :size karakters bevatten.',
        'array' => ':attribute moet :size items bevatten.',
    ],
    'starts_with' => ':attribute moet beginnen met een van de volgende waarden: :values.',
    'string' => ':attribute moet een tekenreeks zijn.',
    'timezone' => ':attribute moet een geldige tijdzone zijn.',
    'unique' => ':attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'url' => ':attribute formaat is ongeldig.',
    'uuid' => ':attribute moet een geldige UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'naam',
        'email' => 'e-mailadres',
        'procedure' => 'behandeling',
        'phone' => 'telefoonnummer',
        'message' => 'bericht',
        'opt_in' => 'akkoord',
    ],

];
