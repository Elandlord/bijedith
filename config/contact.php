<?php

$phone = env('CONTACT_PHONE');

return [
    /*
     * The phone number as it should be shown to visitors, for example "0544 12 34 56".
     * Leave this empty to hide the phone number from the site entirely.
     */
    'phone' => $phone,

    /*
     * The same number stripped down to a value that is valid inside a tel: link.
     */
    'phone_link' => $phone ? preg_replace('/[^0-9+]/', '', $phone) : null,
];
