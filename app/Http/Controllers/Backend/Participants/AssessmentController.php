<?php
namespace App\Http\Controllers\Backend\Participants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        return view('backend.participants.assessment_results.index');
    }
}
