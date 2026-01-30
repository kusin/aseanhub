<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\Judges;
use App\Models\Participants;
use App\Models\UrbanDesign;
use App\Models\Voters;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showAdmin()
    {
        // auth
        $admin = Auth::guard('admin')->user();

        //  The number of user accesses
        $number_admins       = Admins::where('status_data', 'Active')->count();
        $number_judges       = Judges::where('status_data', 'Active')->count();
        $number_participants = Participants::where('status_data', 'Active')->count();
        $number_voters       = Voters::where('status_data', 'Active')->count();

        // participant & urban design
        $participants_uploaded = Participants::where('status_urban_design', 'Completed')->count();
        $participants_pending  = Participants::where('status_urban_design', 'Pending')->count();
        $total_urban_design    = UrbanDesign::where('status_data', 'Active')->count();

        return view('backend.admin.dashboard', compact(

            // auth
            'admin',

            //  The number of user accesses
            'number_admins',
            'number_judges',
            'number_participants',
            'number_voters',

            // participant & urban design
            'participants_uploaded',
            'participants_pending',
            'total_urban_design',
        ));
    }
}
