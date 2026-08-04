@csrf

<div>
    <label for="category" class="block text-sm font-medium text-gray-700">Categorie</label>
    <select id="category" name="category" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
        <option value="{{ \App\Treatment::CATEGORY_BEHANDELING }}" @selected(old('category', $treatment->category ?? '') === \App\Treatment::CATEGORY_BEHANDELING)>Behandeling</option>
        <option value="{{ \App\Treatment::CATEGORY_SPA }}" @selected(old('category', $treatment->category ?? '') === \App\Treatment::CATEGORY_SPA)>Spa-arrangement</option>
    </select>
    @error('category')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
</div>

<div>
    <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
    <input id="name" type="text" name="name" value="{{ old('name', $treatment->name ?? '') }}" required
           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
    @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
</div>

<div>
    <label for="description" class="block text-sm font-medium text-gray-700">Beschrijving</label>
    <textarea id="description" name="description" rows="6" required
              class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">{{ old('description', $treatment->description ?? '') }}</textarea>
    <p class="mt-1 text-xs text-gray-500">HTML-opmaak zoals &lt;br&gt; en &lt;ul&gt; wordt ondersteund.</p>
    @error('description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
</div>

<div>
    <label for="image" class="block text-sm font-medium text-gray-700">Foto (PNG of JPG)</label>
    @isset($treatment)
        <img src="{{ $treatment->image }}" alt="" class="my-2 h-24 w-24 rounded-lg object-cover">
    @endisset
    <input id="image" type="file" name="image" accept="image/png,image/jpeg"
           class="mt-1 block w-full text-sm">
    @error('image')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
</div>

<div class="flex items-center gap-4">
    <button type="submit" class="brand-btn">Opslaan</button>
    <a href="{{ route('admin.treatments.index') }}" class="text-sm text-gray-600 hover:underline">Annuleren</a>
</div>
