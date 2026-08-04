@extends('admin.layout')
@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-display font-semibold text-bijedith-black">Behandelingen & spa-arrangementen</h1>
        <a href="{{ route('admin.treatments.create') }}" class="brand-btn">Nieuwe toevoegen</a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-brand-100 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="border-b border-gray-200 bg-gray-50 text-gray-600">
                <tr>
                    <th class="px-4 py-3">Afbeelding</th>
                    <th class="px-4 py-3">Naam</th>
                    <th class="px-4 py-3">Categorie</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($treatments as $treatment)
                    <tr>
                        <td class="px-4 py-3">
                            <img src="{{ $treatment->image }}" alt="" class="h-12 w-12 rounded-lg object-cover">
                        </td>
                        <td class="px-4 py-3 font-medium text-bijedith-black">{{ $treatment->name }}</td>
                        <td class="px-4 py-3 text-gray-600">
                            {{ $treatment->category === \App\Treatment::CATEGORY_SPA ? 'Spa-arrangement' : 'Behandeling' }}
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.treatments.edit', $treatment) }}" class="text-bijedith-black hover:underline">Bewerken</a>
                            <form method="POST" action="{{ route('admin.treatments.destroy', $treatment) }}" class="inline" onsubmit="return confirm('Weet je het zeker?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-4 text-red-600 hover:underline">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">Nog geen behandelingen toegevoegd.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
