@extends('layouts.backend')
@section('nav-dashboard', 'active')
@section('content')

    {{-- PANEL 1 : My Competition Status --}}
    <div class="row">

        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <i class="fa-solid fa-chart-simple mr-2"></i>
                            <span class="text-bold">Data Completeness</span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table border-bottom">
                                <tbody>
                                    <tr>
                                        <td class="text-left text-dark">Complete Registration</td>
                                        <td class="text-right text-dark">
                                            @include('backend.participants.partials.badge-status', [
                                                'status' => $participant->status_registration,
                                            ])
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Upload Urban Design</td>
                                        <td class="text-right text-dark">
                                            @include('backend.participants.partials.badge-status', [
                                                'status' => $participant->status_urban_design,
                                            ])
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- card-body --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-sm --}}
                <div class="col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <i class="fa-solid fa-chart-simple mr-2"></i>
                            <span class="text-bold">My Competition Status</span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table border-bottom">
                                <tbody>
                                    <tr>
                                        <td class="text-left text-dark">Assessment One</td>
                                        <td class="text-right text-dark">
                                            @include('backend.participants.partials.badge-status', [
                                                'status' => $participant->status_assessment_one,
                                            ])
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Assessment Two</td>
                                        <td class="text-right text-dark">
                                            @include('backend.participants.partials.badge-status', [
                                                'status' => $participant->status_assessment_two,
                                            ])
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Final Assessment</td>
                                        <td class="text-right text-dark">
                                            @include('backend.participants.partials.badge-status', [
                                                'status' => $participant->status_final_assessment,
                                            ])
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- card-body --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-sm --}}
            </div>
        </div>

        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <i class="fa-solid fa-user-graduate mr-2"></i>
                            <span class="text-bold">Information of Participants</span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- 1. Header --}}
                            <div class="text-center mb-3">
                                <h3 class="d-block text-normal">{{ $participant->team_name ?? '-' }}</h3>
                                <h5 class="d-block text-muted">{{ $participant->email ?? '-' }}</h5>
                            </div>

                            {{--  --}}
                            <table class="table border-bottom mb-3">
                                <tbody>
                                    <tr>
                                        <td class="text-left text-dark">Team Leader</td>
                                        <td class="text-right text-dark">
                                            <span>{{ $participant->participants_name_1 ?? '-' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Team Members</td>
                                        <td class="text-right text-dark">
                                            <span>{{ $participant->participants_name_2 ?? '-' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Team Members</td>
                                        <td class="text-right text-dark">
                                            <span>{{ $participant->participants_name_3 ?? '-' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Team Members</td>
                                        <td class="text-right text-dark">
                                            <span>{{ $participant->participants_name_4 ?? '-' }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left text-dark">Team Members</td>
                                        <td class="text-right text-dark">
                                            <span>{{ $participant->participants_name_5 ?? '-' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-block btn-outline-info">
                                        Update Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- card-body --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- col --}}
            </div>
        </div>
    </div>
    {{-- row --}}

@endsection
