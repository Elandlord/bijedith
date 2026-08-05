@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => 'Beheer',
        'title' => 'Behandelingen beheren',
        'subtitle' => 'Voeg behandelingen en spa-arrangementen toe, wijzig ze of verwijder ze.',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-6xl">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <a class="brand-btn" href="{{ route('admin.treatments.create') }}">Nieuwe behandeling</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="brand-btn-outline" type="submit">Uitloggen</button>
                </form>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                @forelse ($treatments as $treatment)
                    <article class="overflow-hidden rounded-2xl border border-brand-100 bg-white shadow-sm">
                        <img src="{{ $treatment->image_url }}" class="h-48 w-full object-cover" alt="" />
                        <div class="space-y-3 p-6">
                            <span class="text-sm font-medium uppercase tracking-wide text-brand-700">{{ $treatment->type === 'pedicure' ? 'Pedicure' : 'Spa' }}</span>
                            <h3 class="text-xl font-display font-semibold text-bijedith-black">{{ $treatment->name }}</h3>
                            <div class="flex gap-3">
                                <a class="brand-btn-outline" href="{{ route('admin.treatments.edit', $treatment) }}">Bewerken</a>
                                <form method="POST" action="{{ route('admin.treatments.destroy', $treatment) }}" onsubmit="return confirm('Weet je zeker dat je deze behandeling wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="brand-btn-outline" type="submit">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-base text-gray-600">Er zijn nog geen behandelingen toegevoegd.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
