<?php
namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Judges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class JudgesController extends Controller
{
    public function index()
    {
        $data = Judges::where('status_data', 'Active')->orderBy('judges_name', 'asc')->get();
        return view('backend.admin.judges.index', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.judges.create');
    }

    public function store(Request $request)
    {
        # step 1.
        $validated = $request->validate([
            'judges_name'        => 'required|string|max:255',
            'origin_country'     => 'required|string|max:255',
            'origin_institution' => 'required|string|max:255',
            'judges_task'        => 'required|string|max:255',
            'judges_photo'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'email'              => 'required|email|unique:tb_judges,email',
            'password'           => 'required|string|min:8',
        ]);

        # step 2.
        $validated['password'] = Hash::make($validated['password']);

        # step 3. ... setpath lokasi photo
        if ($request->hasFile('judges_photo')) {
            $validated['judges_photo'] = $request->file('judges_photo')->store('judges', 'public');
        }

        # step 4.
        Judges::create($validated);

        # step 5.
        return redirect()
            ->route('admin.judges.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Judges created successfully',
            ]);
    }

    public function show(string $id)
    {
        $data = Judges::findOrFail($id);
        return view('backend.admin.judges.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Judges::findOrFail($id);
        return view('backend.admin.judges.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        # step 1.
        $data = Judges::findOrFail($id);

        # step 2.
        $validated = $request->validate([
            'judges_name'        => 'required|string|max:255',
            'origin_country'     => 'required|string|max:255',
            'origin_institution' => 'required|string|max:255',
            'judges_task'        => 'required|string|max:255',
            'judges_photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email'              => 'required|email|unique:tb_judges,email,' . $id . ',id_judges',
            'password'           => 'nullable|string|min:8',
        ]);

        # step 3.
        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        # step 4
        if ($request->hasFile('judges_photo')) {

            # hapus foto lama
            if ($data->judges_photo && Storage::disk('public')->exists($data->judges_photo)) {
                Storage::disk('public')->delete($data->judges_photo);
            }

            # upload foto baru
            $validated['judges_photo'] = $request->file('judges_photo')->store('judges', 'public');
        }

        # step 5. Query Update
        $data->update($validated);

        # step 6. ... redirect halaman
        return redirect()->route('admin.judges.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Judges updated successfully',
            ]);
    }

    public function delete($id)
    {
        $data = Judges::findOrFail($id);
        return view('backend.admin.judges.delete', compact('data'));
    }

    public function destroy(string $id)
    {
        # step 1.
        $data = Judges::findOrFail($id);

        # step 2.
        if ($data->judges_photo && Storage::disk('public')->exists($data->judges_photo)) {
            Storage::disk('public')->delete($data->judges_photo);
        }

        # step 3.
        $data->update(['status_data' => 'Not Active']);

        # step 4
        $data->delete();
        return redirect()->route('admin.judges.index')
            ->with('notify', [
                'status' => 'error',
                'text'   => 'Judges deleted successfully',
            ]);
    }
}
