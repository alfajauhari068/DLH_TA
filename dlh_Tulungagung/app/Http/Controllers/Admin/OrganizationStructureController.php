<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationStructureController extends Controller
{
    public function edit()
    {
        // Fetch the first record or instantiate a new one
        $structure = OrganizationStructure::first() ?? new OrganizationStructure();

        return view('admin.organization-structure.edit', compact('structure'));
    }

    public function update(Request $request)
    {
        $structure = OrganizationStructure::first() ?? new OrganizationStructure();

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Up to 5MB
            'pdf' => 'nullable|mimes:pdf|max:10240', // Up to 10MB
            'legal_basis' => 'nullable|string',
        ]);

        $data = $request->only(['title', 'subtitle', 'description', 'legal_basis']);

        // Handle Image upload
        if ($request->hasFile('image')) {
            if ($structure->image) {
                Storage::disk('public')->delete($structure->image);
            }
            $data['image'] = $request->file('image')->store('organization_structure', 'public');
        }

        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            if ($structure->pdf) {
                Storage::disk('public')->delete($structure->pdf);
            }
            $data['pdf'] = $request->file('pdf')->store('organization_structure', 'public');
        }

        if ($structure->exists) {
            $structure->update($data);
        } else {
            $structure = OrganizationStructure::create($data);
        }

        return redirect()->route('admin.organization-structure.edit')->with('success', 'Struktur organisasi berhasil diperbarui.');
    }
}
