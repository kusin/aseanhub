@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Show Data Judges
                </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row">

        <div class="col-sm-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <span class="text-bold">Photo</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if ($data->photo_url)
                        <img src="{{ $data->photo_url }}" class="img-fluid" alt="Judges Photo">
                    @else
                        <span class="text-muted">No photo available</span>
                    @endif
                </div>
                <div class="card-footer"></div>
            </div>
            {{-- card-info --}}
        </div>
        {{-- col --}}

        <div class="col-sm-8">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <span class="text-bold">Detail Data Judges</span>
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
                            <span>{{ $data->judges_name ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Country</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $data->origin_country ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Institution</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $data->origin_institution ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Task</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $data->judges_task ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 text-dark">Email</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-8 text-dark">
                            <span>{{ $data->email ?? '' }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-danger">
                        <div class="text-right">
                            Data Access {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </div>
                    </small>
                </div>
                {{-- card-footer --}}
            </div>
            {{-- card-info --}}
        </div>
        {{-- col --}}

    </div>
    {{-- row --}}

    {{--     @include('templates.others.info') --}}
    @include('templates.others.info')
@endsection
