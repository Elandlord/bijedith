@component('mail::message')
# Nieuwe contactaanvraag

De volgende contactaanvraag is verstuurd naar BijEdith.

@component('mail::panel')
<strong>Naam:</strong> {{ $name }}<br/>
<strong>Email:</strong> {{ $email }}<br/>
<strong>Behandeling:</strong> {{ $procedure }}<br/>
<strong>Telefoonnummer:</strong> {{ $phone }}<br/>
<strong>Opmerking:</strong> {{ $message ?? 'Geen opmerking achtergelaten.' }}
@endcomponent

Er wordt zo spoedig mogelijk contact opgenomen.

Vriendelijke groet,<br>
BijEdith
@endcomponent
