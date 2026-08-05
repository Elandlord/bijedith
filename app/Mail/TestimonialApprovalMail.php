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
    public $approveUrl;
    public $rejectUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
        $this->approveUrl = URL::signedRoute('testimonials.approve', ['testimonial' => $testimonial->id]);
        $this->rejectUrl = URL::signedRoute('testimonials.reject', ['testimonial' => $testimonial->id]);
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
