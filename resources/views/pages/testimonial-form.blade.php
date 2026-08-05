@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg> Review',
        'title' => 'Deel uw ervaring',
        'subtitle' => 'Bent u tevreden over uw behandeling? Laat hieronder een review achter. Na goedkeuring plaatsen we deze op de website.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-3xl rounded-3xl border border-brand-100 bg-white p-6 shadow-sm lg:p-10">
            @if ($errors->any())
                <ul class="mb-6 space-y-2 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-base text-amber-900">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form class="space-y-4" method="POST" action="{{ route('mail.testimonial') }}">
                @csrf
                @honeypot

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Naam</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="text" name="author" value="{{ old('author') }}" minlength="2" maxlength="50" required>
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Rol (optioneel)</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="text" name="role" value="{{ old('role') }}" placeholder="Bijv. vaste klant" maxlength="50">
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Uw ervaring</span>
                    <textarea class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" name="quote" rows="5" minlength="10" maxlength="500" required>{{ old('quote') }}</textarea>
                </label>

                <div class="flex flex-wrap gap-3">
                    <button class="brand-btn" type="submit">Review versturen</button>
                </div>
            </form>
        </div>
    </section>
@endsection
