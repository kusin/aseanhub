@extends('layouts.backend')
@section('nav-dashboard', 'active')
@section('content')

    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <i class="fas fa-user-graduate mr-2"></i>
                    <span class="text-info">Information of Administrator</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-2 text-dark">
                            <span class="text-bold">Full Name</span>
                        </div>
                        <div class="col-sm-10 text-dark">
                            <span class="text-muted">{{ $admin->admin_name }}</span>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-sm-2 text-dark">
                            <span class="text-bold">Email Account</span>
                        </div>
                        <div class="col-sm-10 text-dark">
                            <span class="text-muted">{{ $admin->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-danger">
                        <div class="text-right">
                            You logged on {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </div>
                    </small>
                </div>
            </div>
            {{-- card --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row mb-4">

        <div class="col-sm-12">
            <div class="callout callout-info">
                <i class="fa-solid fa-file-lines mr-2"></i>
                <span class="text-info">The number of user accesses</span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ str_pad($number_admins, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p class="text-light">Administrator</p>
                </div>
                <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ str_pad($number_judges, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p class="text-light">Total Judges</p>
                </div>
                <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ str_pad($number_participants, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p class="text-dark">Total Participants</p>
                </div>
                <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ str_pad($number_voters, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p class="text-light">Total Voters</p>
                </div>
                <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

    </div>
    {{-- row --}}

    <div class="row mb-4">

        <div class="col-sm-12">
            <div class="callout callout-info">
                <i class="fa-solid fa-file-lines mr-2"></i>
                <span class="text-info">Submission of Urban Design </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ str_pad($participants_uploaded, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p>Upload Completed</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-upload"></i>
                </div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ str_pad($participants_pending, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p>Upload Pending</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-hourglass-half"></i>
                </div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ str_pad($total_urban_design, 3, '0', STR_PAD_LEFT) }}</h3>
                    <p>Total Submissions</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

        <div class="col-sm-3">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>
                        {{ $participants_uploaded > 0 ? number_format($total_urban_design / $participants_uploaded, 2) : '0.00' }}
                    </h3>
                    <p>Avg Design / Participant</p>
                </div>
                <div class="icon">
                    {{-- <i class="fa-solid fa-square-poll-vertical"></i> --}}
                    <i class="fa-solid fa-chart-simple"></i>
                </div>
            </div>
            {{-- small-box --}}
        </div>
        {{-- col --}}

    </div>
    {{-- row --}}





@endsection
