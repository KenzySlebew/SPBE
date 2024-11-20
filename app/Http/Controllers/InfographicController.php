<?php

namespace App\Http\Controllers;

use App\Models\Infographic;
use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function index()
    {
        $infographics = Infographic::latest()->paginate(12);
        return view('infographics.index', compact('infographics'));
    }

    public function show($id)
    {
        $infographic = Infographic::findOrFail($id);
        return view('infographics.show', compact('infographic'));
    }

    public function create()
    {
        return view('infographics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('infographics', 'public');
            $validated['image'] = $imagePath;
        }

        Infographic::create($validated);
        return redirect()->route('infographics.index')->with('success', 'Infografis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $infographic = Infographic::findOrFail($id);
        return view('infographics.edit', compact('infographic'));
    }

    public function update(Request $request, $id)
    {
        $infographic = Infographic::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('infographics', 'public');
            $validated['image'] = $imagePath;
        }

        $infographic->update($validated);
        return redirect()->route('infographics.index')->with('success', 'Infografis berhasil diperbarui');
    }

    public function destroy($id)
    {
        $infographic = Infographic::findOrFail($id);
        $infographic->delete();
        return redirect()->route('infographics.index')->with('success', 'Infografis berhasil dihapus');
    }
}