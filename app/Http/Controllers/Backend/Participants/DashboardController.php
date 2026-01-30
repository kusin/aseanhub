<?php
namespace App\Http\Controllers\Backend\Participants;

use App\Http\Controllers\Controller;
use App\Models\Participants;
use App\Models\UrbanDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showParticipants()
    {
        $participant          = Auth::guard('participant')->user();
        $urban_design_results = UrbanDesign::where('id_participants', $participant->id_participants)
            ->where('status_data', 'Active')->get();

        return view('backend.participants.dashboard', compact(
            'participant',
            'urban_design_results',
        ));
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
