@extends('layouts.backend')
@section('nav-dashboard', 'active')
@section('content')



    {{-- Panel 1. Information of Judges --}}
    <div class="row">

        {{-- Foto Judges --}}
        <div class="col-sm-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <i class="fas fa-user-graduate mr-2"></i>
                    <span class="text-info">Photo</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if ($judge->photo_url)
                        <img src="{{ $judge->photo_url }}" class="img-fluid" alt="Judges Photo">
                    @else
                        <span class="text-muted">No photo available</span>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-block btn-outline-danger">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Logout
                    </button>
                </div>
            </div>
        </div>

        {{-- Detail Information --}}
        <div class="col-sm-8">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <i class="fas fa-user-graduate mr-2"></i>
                    <span class="text-info">Information of Judges</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Full Name</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $judge->judges_name ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Country</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $judge->origin_country ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Institution</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $judge->origin_institution ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Task</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $judge->judges_task ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Email</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $judge->email ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-block btn-outline-info">
                                Update Profile
                            </button>
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

    @include('templates.others.info_judges')

@endsection
