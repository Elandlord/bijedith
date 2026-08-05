<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TreatmentRequest;
use App\Treatment;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    public function index(): Renderable
    {
        $treatments = Treatment::orderBy('type')->orderBy('name')->get();

        return view('admin.treatments.index', compact('treatments'));
    }

    public function create(): Renderable
    {
        $treatment = new Treatment();

        return view('admin.treatments.create', compact('treatment'));
    }

    public function store(TreatmentRequest $request): RedirectResponse
    {
        Treatment::create([
            'type'        => $request->input('type'),
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'image'       => $request->file('image')->store('treatments', 'public'),
        ]);

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling is toegevoegd.');
    }

    public function edit(Treatment $treatment): Renderable
    {
        return view('admin.treatments.edit', compact('treatment'));
    }

    public function update(TreatmentRequest $request, Treatment $treatment): RedirectResponse
    {
        $data = [
            'type'        => $request->input('type'),
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($treatment->image);
            $data['image'] = $request->file('image')->store('treatments', 'public');
        }

        $treatment->update($data);

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling is bijgewerkt.');
    }

    public function destroy(Treatment $treatment): RedirectResponse
    {
        Storage::disk('public')->delete($treatment->image);
        $treatment->delete();

        return redirect()->route('admin.treatments.index')->with('success', 'Behandeling is verwijderd.');
    }
}
