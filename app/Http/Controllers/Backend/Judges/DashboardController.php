<?php
namespace App\Http\Controllers\Backend\Judges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showJudges()
    {
        $judge = Auth::guard('judge')->user();
        return view('backend.judges.dashboard', compact('judge'));
    }

}
