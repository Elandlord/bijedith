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

    'accepted' => 'Het :attribute veld moet geaccepteerd worden.',
    'active_url' => 'Het :attribute is geen geldige URL.',
    'after' => 'Het :attribute moet een datum zijn na :date.',
    'after_or_equal' => 'Het :attribute moet een datum zijn op of na :date.',
    'alpha' => 'Het :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => 'Het :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'Het :attribute moet een lijst zijn.',
    'before' => 'Het :attribute moet een datum zijn voor :date.',
    'before_or_equal' => 'Het :attribute moet een datum zijn op of voor :date.',
    'between' => [
        'numeric' => 'Het :attribute moet tussen :min en :max zitten.',
        'file' => 'Het :attribute moet tussen :min en :max kilobytes zijn.',
        'string' => 'Het :attribute moet tussen :min en :max karakters bevatten.',
        'array' => 'Het :attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => 'Het :attribute veld moet true of false zijn.',
    'confirmed' => 'De :attribute bevestiging komt niet overeen.',
    'date' => 'Het :attribute is geen geldige datum.',
    'date_equals' => 'Het :attribute moet een datum zijn gelijk aan :date.',
    'date_format' => 'Het :attribute komt niet overeen met het formaat :format.',
    'different' => 'Het :attribute en :other moeten verschillend zijn.',
    'digits' => 'Het :attribute moet :digits cijfers bevatten.',
    'digits_between' => 'Het :attribute moet tussen :min en :max cijfers bevatten.',
    'dimensions' => 'Het :attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het :attribute veld heeft een dubbele waarde.',
    'email' => 'Het :attribute moet een geldig e-mailadres zijn.',
    'ends_with' => 'Het :attribute moet eindigen op een van de volgende waarden: :values.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'file' => 'Het :attribute moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde bevatten.',
    'gt' => [
        'numeric' => 'Het :attribute moet groter zijn dan :value.',
        'file' => 'Het :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'Het :attribute moet groter zijn dan :value karakters.',
        'array' => 'Het :attribute moet meer dan :value items bevatten.',
    ],
    'gte' => [
        'numeric' => 'Het :attribute moet groter dan of gelijk aan :value zijn.',
        'file' => 'Het :attribute moet groter dan of gelijk aan :value kilobytes zijn.',
        'string' => 'Het :attribute moet groter dan of gelijk aan :value karakters zijn.',
        'array' => 'Het :attribute moet :value items of meer bevatten.',
    ],
    'image' => 'Het :attribute moet een afbeelding zijn.',
    'in' => 'Het geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld bestaat niet in :other.',
    'integer' => 'Het :attribute moet een geheel getal zijn.',
    'ip' => 'Het :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'Het :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'Het :attribute moet een geldige JSON-string zijn.',
    'lt' => [
        'numeric' => 'Het :attribute moet kleiner zijn dan :value.',
        'file' => 'Het :attribute moet kleiner zijn dan :value kilobytes.',
        'string' => 'Het :attribute moet kleiner zijn dan :value karakters.',
        'array' => 'Het :attribute moet minder dan :value items bevatten.',
    ],
    'lte' => [
        'numeric' => 'Het :attribute moet kleiner dan of gelijk aan :value zijn.',
        'file' => 'Het :attribute moet kleiner dan of gelijk aan :value kilobytes zijn.',
        'string' => 'Het :attribute moet kleiner dan of gelijk aan :value karakters zijn.',
        'array' => 'Het :attribute mag niet meer dan :value items bevatten.',
    ],
    'max' => [
        'numeric' => 'Het :attribute mag niet groter zijn dan :max.',
        'file' => 'Het :attribute mag niet groter zijn dan :max kilobytes.',
        'string' => 'Het :attribute mag niet groter zijn dan :max karakters.',
        'array' => 'Het :attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => 'Het :attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => 'Het :attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => 'Het :attribute moet minstens :min zijn.',
        'file' => 'Het :attribute moet minstens :min kilobytes zijn.',
        'string' => 'Het :attribute moet minstens :min karakters bevatten.',
        'array' => 'Het :attribute moet minstens :min items bevatten.',
    ],
    'not_in' => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het formaat van :attribute is ongeldig.',
    'numeric' => 'Het :attribute moet een getal zijn.',
    'password' => 'Het wachtwoord is onjuist.',
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'regex' => 'Het formaat van :attribute is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_if' => 'Het :attribute veld is verplicht wanneer :other :value is.',
    'required_unless' => 'Het :attribute veld is verplicht, tenzij :other in :values voorkomt.',
    'required_with' => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => 'Het :attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => 'Het :attribute moet :size zijn.',
        'file' => 'Het :attribute moet :size kilobytes zijn.',
        'string' => 'Het :attribute moet :size karakters bevatten.',
        'array' => 'Het :attribute moet :size items bevatten.',
    ],
    'starts_with' => 'Het :attribute moet beginnen met een van de volgende waarden: :values.',
    'string' => 'Het :attribute moet een string zijn.',
    'timezone' => 'Het :attribute moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'url' => 'Het formaat van :attribute is ongeldig.',
    'uuid' => 'Het :attribute moet een geldige UUID zijn.',

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
