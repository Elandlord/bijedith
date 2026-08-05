@component('mail::message')
# Bedankt voor uw aanvraag

Bedankt voor uw aanvraag bij BijEdith, wij nemen zo spoedig mogelijk contact met u op.

@component('mail::panel')
<strong>Naam:</strong> {{ $name }}<br/>
<strong>Email:</strong> {{ $email }}<br/>
<strong>Behandeling:</strong> {{ $procedure }}<br/>
<strong>Telefoonnummer:</strong> {{ $phone }}<br/>
<strong>Opmerking:</strong> {{ $message ?? 'Geen opmerking achtergelaten.' }}
@endcomponent

Vriendelijke groet,<br>
BijEdith
@endcomponent
