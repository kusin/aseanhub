<?php

# Controller Auth
use App\Http\Controllers\Auth\LoginController;

# Controller Halaman Backend
# - Admin
use App\Http\Controllers\Backend\Admin\JudgesController as JudgesBackend;
use App\Http\Controllers\Backend\Admin\ParticipantsController as ParticipantsBackend;
use App\Http\Controllers\Backend\Admin\UrbanDesignController as UrbanDesignBackend;
use App\Http\Controllers\Backend\Admin\VotersController as VotersBackend;
use App\Http\Controllers\Backend\DashboardController as DashboardBackend;

# - Judges
use App\Http\Controllers\Backend\Judges\AssessmentController as CJ_AssessmentController;
use App\Http\Controllers\Backend\Judges\DashboardController as CJ_DashboardController;
use App\Http\Controllers\Backend\Judges\JudgesController as CJ_JudgesController;
use App\Http\Controllers\Backend\Judges\UrbanDesignController as CJ_UrbanDesignController;

# - Participants
use App\Http\Controllers\Backend\Participants\AssessmentController as CP_AssessmentController;
use App\Http\Controllers\Backend\Participants\DashboardController as CP_DashboardController;
use App\Http\Controllers\Backend\Participants\ParticipantsController as CP_ParticipantsController;
use App\Http\Controllers\Backend\Participants\UrbanDesignController as CP_UrbanDesignController;

# - Voters

# Controller Halaman Frontend
# ...

# Other
use Illuminate\Support\Facades\Route;

# ------------------------------------------------------------------------------------------------- #
# Route Auth -------------------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::middleware('guest.role')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.process');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Admin ------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::prefix('admin')->name('admin.')->middleware('auth:admin')
    ->group(function () {

        # 1.Dashboard
        Route::get('/dashboard', [DashboardBackend::class, 'showAdmin'])->name('dashboard');

        # 2. Data Judges
        Route::get('judges/{judge}/delete', [JudgesBackend::class, 'delete'])->name('judges.delete');
        Route::resource('judges', JudgesBackend::class);

        # 3. Data participants
        Route::get('participants/{participant}/delete', [ParticipantsBackend::class, 'delete'])->name('participants.delete');
        Route::resource('participants', ParticipantsBackend::class);

        # 4. Data Voters
        Route::resource('voters', VotersBackend::class);

        # 5. Data Urban Design
        Route::resource('urban-design', UrbanDesignBackend::class);

    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Judges ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::prefix('judges')->name('judges.')->middleware('auth:judge')
    ->group(function () {

        # 1.Dashboard
        Route::get('/dashboard', [CJ_DashboardController::class, 'showJudges'])->name('dashboard');

        # 2. Updated Profile
        Route::resource('update-profile', CJ_JudgesController::class);

        # 3. Judges Results - Data Urban Design
        Route::resource('urban-design', CJ_UrbanDesignController::class);

        # 4. Judges Results - Assessment Results
        Route::resource('assessment-results', CJ_AssessmentController::class);
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Participants ------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::prefix('participants')->name('participants.')->middleware('auth:participant')
    ->group(function () {

        # 1.Dashboard
        Route::get('/dashboard', [CP_DashboardController::class, 'showParticipants'])->name('dashboard');

        # 2. Updated Profile
        Route::resource('update-profile', CP_ParticipantsController::class);

        # 3. Participant Results - Upload Urban Design
        Route::get('urban-design/{urban_design}/delete', [CP_UrbanDesignController::class, 'delete'])->name('urban-design.delete');
        Route::resource('urban-design', CP_UrbanDesignController::class);

        # 4. PARTICIPANT RESULTS - Assessment Results
        Route::resource('assessment-results', CP_AssessmentController::class);

    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Voters ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
# - Modul Belum dibuat

# Other
Route::get('/', function () {
    return view('auth.login');
});
