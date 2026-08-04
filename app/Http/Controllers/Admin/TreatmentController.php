<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TreatmentRequest;
use App\Treatment;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TreatmentController extends Controller
{
    public function index(): Renderable
    {
        $treatments = Treatment::orderBy('category')->orderBy('id')->get();

        return view('admin.treatments.index', compact('treatments'));
    }

    public function create(): Renderable
    {
        return view('admin.treatments.create');
    }

    public function store(TreatmentRequest $request): RedirectResponse
    {
        $attributes = $request->safe()->only(['category', 'name', 'description']);
        [$attributes['image'], $attributes['webp_image']] = $this->storeImage($request->file('image'));

        Treatment::create($attributes);

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling toegevoegd.');
    }

    public function edit(Treatment $treatment): Renderable
    {
        return view('admin.treatments.edit', compact('treatment'));
    }

    public function update(TreatmentRequest $request, Treatment $treatment): RedirectResponse
    {
        $attributes = $request->safe()->only(['category', 'name', 'description']);

        if ($request->hasFile('image')) {
            [$attributes['image'], $attributes['webp_image']] = $this->storeImage($request->file('image'));
        }

        $treatment->update($attributes);

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling bijgewerkt.');
    }

    public function destroy(Treatment $treatment): RedirectResponse
    {
        $treatment->delete();

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling verwijderd.');
    }

    /**
     * Stores the uploaded image alongside a webp copy, matching the
     * existing public/assets/pictures (+ webp/) convention the templates rely on.
     *
     * @return array{0: string, 1: string}
     */
    private function storeImage(UploadedFile $file): array
    {
        $extension = $file->extension();
        $filename = Str::uuid() . '.' . $extension;
        $webpFilename = Str::uuid() . '.webp';

        Storage::disk('treatment_images')->putFileAs('', $file, $filename);

        $source = match ($extension) {
            'png'         => imagecreatefrompng(Storage::disk('treatment_images')->path($filename)),
            'jpg', 'jpeg' => imagecreatefromjpeg(Storage::disk('treatment_images')->path($filename)),
            default       => null,
        };

        if ($source !== null) {
            imagewebp($source, Storage::disk('treatment_images_webp')->path($webpFilename));
            imagedestroy($source);
        }

        return [
            '/assets/pictures/' . $filename,
            '/assets/pictures/webp/' . $webpFilename,
        ];
    }
}
