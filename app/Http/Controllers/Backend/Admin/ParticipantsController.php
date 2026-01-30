<?php
namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParticipantsController extends Controller
{
    public function index()
    {
        $data = Participants::where('status_data', 'Active')->orderBy('team_name', 'asc')->get();
        return view('backend.admin.participants.index', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.participants.create');
    }

    public function store(Request $request)
    {
        # step 1.
        $validated = $request->validate([
            'team_name'               => 'required|string|max:255',
            'participants_name_1'     => 'required|string|max:255',
            'participants_name_2'     => 'nullable|string|max:255',
            'participants_name_3'     => 'nullable|string|max:255',
            'participants_name_4'     => 'nullable|string|max:255',
            'participants_name_5'     => 'nullable|string|max:255',
            'participants_country'    => 'required|string|max:255',
            'participants_phone'      => 'required|string|max:15',
            'status_registration'     => 'required',
            'status_urban_design'     => 'required',
            'status_assessment_one'   => 'required',
            'status_assessment_two'   => 'required',
            'status_final_assessment' => 'required',
            'email'                   => 'required|email|unique:tb_participants,email',
            'password'                => 'required|string|min:8',
        ]);

        # step 2.
        $validated['password'] = Hash::make($validated['password']);

        # step 3.
        Participants::create($validated);

        # step 4.
        return redirect()
            ->route('admin.participants.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Participants created successfully',
            ]);
    }

    public function show(string $id)
    {
        $data = Participants::findOrFail($id);
        return view('backend.admin.participants.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Participants::findOrFail($id);
        return view('backend.admin.participants.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        # step 1.
        $data = Participants::findOrFail($id);

        #step 2.
        $validated = $request->validate([
            'team_name'               => 'required|string|max:255',
            'participants_name_1'     => 'required|string|max:255',
            'participants_name_2'     => 'nullable|string|max:255',
            'participants_name_3'     => 'nullable|string|max:255',
            'participants_name_4'     => 'nullable|string|max:255',
            'participants_name_5'     => 'nullable|string|max:255',
            'participants_country'    => 'required|string|max:255',
            'participants_phone'      => 'required|string|max:15',
            'status_registration'     => 'required',
            'status_urban_design'     => 'required',
            'status_assessment_one'   => 'required',
            'status_assessment_two'   => 'required',
            'status_final_assessment' => 'required',
            'email'                   => 'required|email|unique:tb_participants,email,' . $id . ',id_participants',
            'password'                => 'nullable|string|min:8',
        ]);

        # step 3.
        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        # step 4. update
        $data->update($validated);
        return redirect()
            ->route('admin.participants.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Participants updated successfully',
            ]);
    }

    public function delete($id)
    {
        $data = Participants::findOrFail($id);
        return view('backend.admin.participants.delete', compact('data'));
    }

    public function destroy(string $id)
    {
        $data = Participants::findOrFail($id);
        $data->update(['status_data' => 'Not Active']);
        $data->delete();
        return redirect()
            ->route('admin.participants.index')
            ->with('notify', [
                'status' => 'error',
                'text'   => 'Participants deleted successfully',
            ]);
    }
}
