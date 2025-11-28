<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Http\Requests\ConferenceRequest;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $allConferences = Conference::orderBy('date', 'desc')->get();

        return view('conferences.index', ['conferences' => $allConferences]);
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        $validatedData = $request->validated();
        Conference::create($validatedData);

        return redirect()
            ->route('conferences.index')
            ->with('success', __('conferences.messages.created'));
    }

    public function show(Conference $conference)
    {
        return view('conferences.show', ['conference' => $conference]);
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', ['conference' => $conference]);
    }

    public function update(ConferenceRequest $request, Conference $conference)
    {
        $validatedData = $request->validated();
        $conference->update($validatedData);

        return redirect()
            ->route('conferences.index')
            ->with('success', __('conferences.messages.updated'));
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()
            ->route('conferences.index')
            ->with('success', __('conferences.messages.deleted'));
    }
}
