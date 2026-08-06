@component('mail::message')
# Nieuwe review ter goedkeuring

Er is een nieuwe review binnengekomen voor BijEdith.

@component('mail::panel')
<strong>Naam:</strong> {{ $testimonial->author }}<br/>
<strong>Rol:</strong> {{ $testimonial->role ?? 'Geen rol opgegeven' }}<br/>
<strong>Review:</strong> {{ $testimonial->quote }}
@endcomponent

Bekijk de review om deze goed te keuren of af te wijzen.

@component('mail::button', ['url' => $reviewUrl])
Review bekijken
@endcomponent

Vriendelijke groet,<br>
BijEdith
@endcomponent
