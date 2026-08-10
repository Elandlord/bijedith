<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Mail\TestimonialApprovalMail;
use App\Testimonial;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class TestimonialController extends Controller
{
    public function create(): Renderable
    {
        return view('pages.testimonial-form');
    }

    public function store(TestimonialRequest $request): RedirectResponse
    {
        $testimonial = Testimonial::create([
            'author' => $request->input('author'),
            'role'   => $request->input('role'),
            'quote'  => $request->input('quote'),
        ]);

        Mail::to('info@bijedith.nl')->send(new TestimonialApprovalMail($testimonial));

        return redirect()->route('testimonials.create')->with('success', 'Bedankt voor uw review! Deze wordt na goedkeuring op de website geplaatst.');
    }

    public function review(Testimonial $testimonial): Renderable
    {
        return view('pages.testimonial-review', [
            'testimonial' => $testimonial,
            'approveUrl'  => URL::temporarySignedRoute('testimonials.approve', now()->addDays(7), ['testimonial' => $testimonial->id]),
            'rejectUrl'   => URL::temporarySignedRoute('testimonials.reject', now()->addDays(7), ['testimonial' => $testimonial->id]),
        ]);
    }

    public function approve(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->update(['approved_at' => now()]);

        return redirect()->route('home')->with('success', 'De review is goedgekeurd en staat nu op de website.');
    }

    public function reject(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();

        return redirect()->route('home')->with('success', 'De review is afgewezen en verwijderd.');
    }
}
