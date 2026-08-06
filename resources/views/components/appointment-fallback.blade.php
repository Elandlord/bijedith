<section class="px-4 py-16 sm:px-6 lg:px-8" id="afspraak-formulier" data-booking-fallback {{ $errors->any() ? '' : 'hidden' }}>
    <div class="mx-auto w-full max-w-3xl rounded-3xl border border-brand-100 bg-white p-6 shadow-sm lg:p-10">
        <span class="section-kicker"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg> Afspraak</span>
        <h2 class="section-title">Afspraak aanvragen</h2>
        <p class="mt-4 text-base text-gray-600">Het online boekingsysteem kon niet worden geladen. Laat hieronder uw gegevens achter, dan nemen wij contact met u op.</p>

        @if ($errors->any())
            <ul class="mt-6 space-y-2 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-base text-amber-900">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form class="mt-6 space-y-4" method="POST" action="{{ route('mail.appointment') }}">
            @csrf
            @honeypot

            <div class="grid gap-6 md:grid-cols-2">
                <label class="block">
                    <span class="text-base font-medium text-gray-900">Naam</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="text" name="name" value="{{ old('name') }}" minlength="2" maxlength="50" required>
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">E-mailadres</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="email" name="email" value="{{ old('email') }}" minlength="5" maxlength="100" required>
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Behandeling</span>
                    <select class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" name="procedure" required>
                        <option value="" disabled @if (! old('procedure')) selected @endif>Selecteer behandeling</option>
                        @foreach (\App\Treatment::orderBy('type')->orderBy('name')->get()->groupBy('type') as $type => $treatments)
                            <optgroup label="{{ ucfirst($type) }}">
                                @foreach ($treatments as $treatment)
                                    <option value="{{ $treatment->name }}" @if (old('procedure') === $treatment->name) selected @endif>{{ $treatment->name }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </label>

                <label class="block">
                    <span class="text-base font-medium text-gray-900">Telefoonnummer</span>
                    <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="tel" name="phone" value="{{ old('phone') }}" minlength="5" maxlength="25" required>
                </label>
            </div>

            <label class="block">
                <span class="text-base font-medium text-gray-900">Opmerking</span>
                <textarea class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" name="message" rows="4" maxlength="350">{{ old('message') }}</textarea>
            </label>

            <label class="flex items-center gap-3 text-base text-gray-600">
                <input class="h-4 w-4" type="checkbox" name="opt_in" value="1" required>
                <span>Ik ga akkoord met de <a class="text-brand-700" target="_blank" href="{{ route('privacy') }}">privacyverklaring</a>.</span>
            </label>

            <div class="flex flex-wrap gap-3">
                <button class="brand-btn" type="submit">Versturen</button>
                @if (config('contact.phone'))
                    <a class="brand-btn-outline" href="tel:{{ config('contact.phone_link') }}">Of bel: {{ config('contact.phone') }}</a>
                @endif
            </div>
        </form>
    </div>
</section>
