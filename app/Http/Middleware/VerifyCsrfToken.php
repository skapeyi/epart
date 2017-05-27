<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'retrieve_shortcode_messages','send_sms','get_users','get_discussions','get_information','get_smses','get_radiotopics','send_bulk_sms','get_outgoing_sms'
    ];
}
