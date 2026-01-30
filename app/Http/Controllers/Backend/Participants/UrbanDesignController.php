<?php
namespace App\Http\Controllers\Backend\Participants;

use App\Http\Controllers\Controller;
use App\Models\UrbanDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UrbanDesignController extends Controller
{
    public function index()
    {
        $participant = Auth::guard('participant')->user()->id_participants;
        $data        = UrbanDesign::with('participants')
            ->where('id_participants', $participant)
            ->where('status_data', 'Active')
            ->latest()->get();

        return view('backend.participants.urban_design.index', compact('data'));
    }

    public function create()
    {
        return view('backend.participants.urban_design.create');
    }

    public function store(Request $request)
    {
        # step 1. validated form
        $validated = $request->validate([

            'design_title'        => 'required|string|max:255',
            'design_description'  => 'required|string',
            'design_presentation' => 'required|file|mimes:pdf,ppt,pptx|max:10240',

            'images_1'            => 'required|image|mimes:jpg,jpeg,png|max:10240',
            'images_2'            => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
            'images_3'            => 'nullable|image|mimes:jpg,jpeg,png|max:10240',

            'videos_1'            => 'required|url',
            'videos_2'            => 'nullable|url',
            'videos_3'            => 'nullable|url',

        ]);

        # step 2. inject participant
        $validated['id_participants'] = Auth::guard('participant')->user()->id_participants;

        # step 3. upload files
        if ($request->hasFile('design_presentation')) {
            $validated['design_presentation'] =
            $request->file('design_presentation')
                ->store('urban_design/presentations', 'public');
        }

        if ($request->hasFile('images_1')) {
            $validated['images_1'] =
            $request->file('images_1')
                ->store('urban_design/images', 'public');
        }

        if ($request->hasFile('images_2')) {
            $validated['images_2'] = $request->file('images_2')
                ->store('urban_design/images', 'public');
        }

        if ($request->hasFile('images_3')) {
            $validated['images_3'] =
            $request->file('images_3')
                ->store('urban_design/images', 'public');
        }

        # step 4. submit dan redirect
        UrbanDesign::create($validated);

        return redirect()
            ->route('participants.urban-design.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Submission successfully added',
            ]);

    }

    public function show(string $id)
    {
        $participant = Auth::guard('participant')->user()->id_participants;
        $data        = UrbanDesign::with('participants')
            ->where('id_urban_design', $id)
            ->where('id_participants', $participant)
            ->firstOrFail();

        return view('backend.participants.urban_design.show', compact('data'));
    }

    public function edit(string $id)
    {
        $participantId = Auth::guard('participant')->user()->id_participants;

        $data = UrbanDesign::where('id_urban_design', $id)
            ->where('id_participants', $participantId)
            ->firstOrFail();

        return view('backend.participants.urban_design.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $participantId = Auth::guard('participant')->user()->id_participants;
        $data          = UrbanDesign::where('id_urban_design', $id)
            ->where('id_participants', $participantId)
            ->firstOrFail();

        $validated = $request->validate([
            'design_title'        => 'required|string|max:255',
            'design_description'  => 'required|string',
            'design_presentation' => 'required|file|mimes:pdf,ppt,pptx|max:10240',

            'images_1'            => 'required|image|mimes:jpg,jpeg,png|max:10240',
            'images_2'            => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
            'images_3'            => 'nullable|image|mimes:jpg,jpeg,png|max:10240',

            'videos_1'            => 'required|url',
            'videos_2'            => 'nullable|url',
            'videos_3'            => 'nullable|url',
        ]);

        // Presentation
        if ($request->hasFile('design_presentation')) {
            if ($data->design_presentation && Storage::disk('public')->exists($data->design_presentation)) {
                Storage::disk('public')->delete($data->design_presentation);
            }

            $validated['design_presentation'] =
            $request->file('design_presentation')
                ->store('urban_design/presentations', 'public');
        }

        foreach (['images_1', 'images_2', 'images_3'] as $field) {
            if ($request->hasFile($field)) {
                if ($data->$field && Storage::disk('public')->exists($data->$field)) {
                    Storage::disk('public')->delete($data->$field);
                }
                $validated[$field] = $request->file($field)->store('urban_design/images', 'public');
            }
        }

        $data->update($validated);
        return redirect()
            ->route('participants.urban-design.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Submission successfully updated.',
            ]);
    }

    public function delete($id)
    {
        $participantId = Auth::guard('participant')->user()->id_participants;

        $data = UrbanDesign::where('id_urban_design', $id)
            ->where('id_participants', $participantId)
            ->firstOrFail();

        return view('backend.participants.urban_design.delete', compact('data'));
    }

    public function destroy(string $id)
    {
        $participantId = Auth::guard('participant')->user()->id_participants;

        $data = UrbanDesign::where('id_urban_design', $id)
            ->where('id_participants', $participantId)
            ->firstOrFail();

        if ($data->design_presentation && Storage::disk('public')->exists($data->design_presentation)) {
            Storage::disk('public')->delete($data->design_presentation);
        }

        foreach (['images_1', 'images_2', 'images_3'] as $field) {
            if ($data->$field && Storage::disk('public')->exists($data->$field)) {
                Storage::disk('public')->delete($data->$field);
            }
        }

        $data->update(['status_data' => 'Not Active']);
        $data->delete();

        return redirect()
            ->route('participants.urban-design.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'submission successfully deleted.',
            ]);
    }
}
