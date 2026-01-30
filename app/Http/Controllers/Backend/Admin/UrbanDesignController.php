<?php
namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\UrbanDesign;
use Illuminate\Http\Request;

class UrbanDesignController extends Controller
{
    public function index()
    {
        $data = UrbanDesign::with('participants')
            ->where('status_data', 'Active')->get()
            ->sortBy(fn($item) => $item->participants->team_name);
        return view('backend.admin.urban_design.index', compact('data'));
    }

    public function create()
    {
        // Nanti fokus ke index da show dlu
    }

    public function store(Request $request)
    {
        // Nanti fokus ke index da show dlu
    }

    public function show(string $id)
    {
        // $data = UrbanDesign::findOrFail($id);
        // return view('backend.admin.urban_design.show', compact('data'));

        $data = UrbanDesign::with('participants')->findOrFail($id);
        return view('backend.admin.urban_design.show', compact('data'));
    }

    public function edit(string $id)
    {
        // Nanti fokus ke index da show dlu
    }

    public function update(Request $request, string $id)
    {
        // Nanti fokus ke index da show dlu
    }

    public function destroy(string $id)
    {
        // Nanti fokus ke index da show dlu
    }
}
