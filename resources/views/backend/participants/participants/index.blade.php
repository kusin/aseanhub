@extends('layouts.backend')

@include('templates.datatables.styles')
@include('templates.notify.styles')
@section('nav-update-profile', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Update Profile
                </span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="alert alert-info" role="alert">
                Coming soon - Under Construction
            </div>
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

@endsection
@include('templates.datatables.scripts')
@include('templates.notify.scripts')
