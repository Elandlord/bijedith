<?php

namespace App\Mail;

use App\Testimonial;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class TestimonialApprovalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $testimonial;
    public $reviewUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
        $this->reviewUrl = URL::signedRoute('testimonials.review', ['testimonial' => $testimonial->id]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@bijedith.nl')
            ->subject('Nieuwe review ter goedkeuring')
            ->markdown('mails.testimonial-approval');
    }
}
