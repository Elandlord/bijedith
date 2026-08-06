@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg> Review',
        'title' => 'Review beoordelen',
        'subtitle' => 'Keur deze review goed om hem op de website te tonen, of wijs hem af.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-3xl rounded-3xl border border-brand-100 bg-white p-6 shadow-sm lg:p-10">
            <p class="text-base font-medium text-gray-900">{{ $testimonial->author }}</p>
            @if ($testimonial->role)
                <p class="text-sm text-gray-500">{{ $testimonial->role }}</p>
            @endif
            <p class="mt-4 text-base text-gray-900">{{ $testimonial->quote }}</p>

            <div class="mt-6 flex flex-wrap gap-3">
                <form method="POST" action="{{ $approveUrl }}">
                    @csrf
                    <button class="brand-btn" type="submit">Goedkeuren</button>
                </form>

                <form method="POST" action="{{ $rejectUrl }}">
                    @csrf
                    <button class="brand-btn" type="submit">Afwijzen</button>
                </form>
            </div>
        </div>
    </section>
@endsection
