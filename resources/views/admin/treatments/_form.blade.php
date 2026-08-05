@if ($errors->any())
    <ul class="mb-6 space-y-2 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-base text-amber-900">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form class="space-y-4" method="POST" action="{{ $treatment->exists ? route('admin.treatments.update', $treatment) : route('admin.treatments.store') }}" enctype="multipart/form-data">
    @csrf
    @if ($treatment->exists)
        @method('PUT')
    @endif

    <label class="block">
        <span class="text-base font-medium text-gray-900">Type</span>
        <select class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" name="type" required>
            <option value="pedicure" @if (old('type', $treatment->type) === 'pedicure') selected @endif>Pedicure</option>
            <option value="spa" @if (old('type', $treatment->type) === 'spa') selected @endif>Spa</option>
        </select>
    </label>

    <label class="block">
        <span class="text-base font-medium text-gray-900">Naam</span>
        <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="text" name="name" value="{{ old('name', $treatment->name) }}" required>
    </label>

    <label class="block">
        <span class="text-base font-medium text-gray-900">Beschrijving</span>
        <textarea class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" name="description" rows="6" required>{{ old('description', $treatment->description) }}</textarea>
    </label>

    <label class="block">
        <span class="text-base font-medium text-gray-900">Afbeelding</span>
        @if ($treatment->exists)
            <img src="{{ $treatment->image_url }}" class="mt-2 h-32 w-32 rounded-xl object-cover" alt="" />
        @endif
        <input class="mt-1 w-full rounded-xl border border-brand-100 px-4 py-3 text-base text-gray-900" type="file" name="image" accept="image/*" @if (! $treatment->exists) required @endif>
    </label>

    <div class="flex gap-3">
        <button class="brand-btn" type="submit">Opslaan</button>
        <a class="brand-btn-outline" href="{{ route('admin.treatments.index') }}">Annuleren</a>
    </div>
</form>
