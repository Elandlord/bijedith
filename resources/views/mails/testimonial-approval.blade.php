@component('mail::message')
# Nieuwe review ter goedkeuring

Er is een nieuwe review binnengekomen voor BijEdith.

@component('mail::panel')
<strong>Naam:</strong> {{ $testimonial->author }}<br/>
<strong>Rol:</strong> {{ $testimonial->role ?? 'Geen rol opgegeven' }}<br/>
<strong>Review:</strong> {{ $testimonial->quote }}
@endcomponent

Keur de review goed om deze op de website te tonen, of wijs de review af.

@component('mail::button', ['url' => $approveUrl])
Goedkeuren
@endcomponent

@component('mail::button', ['url' => $rejectUrl, 'color' => 'error'])
Afwijzen
@endcomponent

Vriendelijke groet,<br>
BijEdith
@endcomponent
