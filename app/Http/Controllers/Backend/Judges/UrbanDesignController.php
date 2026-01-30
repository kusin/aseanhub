<?php
namespace App\Http\Controllers\Backend\Judges;

use App\Http\Controllers\Controller;
use App\Models\UrbanDesign;
use Illuminate\Http\Request;

class UrbanDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UrbanDesign::with('participants')
            ->where('status_data', 'Active')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('backend.judges.urban_design.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = UrbanDesign::with('participants')
            ->where('id_urban_design', $id)
            ->where('status_data', 'Active')
            ->firstOrFail();
        return view('backend.judges.urban_design.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
