@extends('layouts.backend')

@section('nav-participants', 'active')
@section('content')

    @php
        $registrationStatus = [
            'Completed' => 'badge-success',
            'Pending' => 'badge-warning',
        ];

        $assessmentStatus = [
            'Approved' => 'badge-success',
            'Pending' => 'badge-warning',
            'Rejected' => 'badge-danger',
        ];
    @endphp

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Show Data Participants
                </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info card-outline">
                <div class="card-body">

                    {{-- 1. Header --}}
                    <div class="text-center mt-2 mb-4">
                        <h3 class="d-block text-normal">{{ $data->team_name ?? '-' }}</h3>
                        <h5 class="d-block text-muted">{{ $data->email ?? '-' }}</h5>
                    </div>

                    {{-- 2. status participants --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table border-bottom mb-4">
                                <tr>
                                    <td class="text-left">Status Registration</td>
                                    <td class="text-right">
                                        <span class="badge badge-custom {{ $registrationStatus[$data->status_registration] ?? 'badge-secondary' }}">
                                            {{ $data->status_registration ?? '-' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">Status Urban Design</td>
                                    <td class="text-right">
                                        <span class="badge badge-custom {{ $registrationStatus[$data->status_urban_design] ?? 'badge-secondary' }}">
                                            {{ $data->status_urban_design ?? '-' }}
                                        </span>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="table border-bottom mb-4">
                                <tr>
                                    <td class="text-left">Assessment One</td>
                                    <td class="text-right">
                                        <span class="badge badge-custom {{ $assessmentStatus[$data->status_assessment_one] ?? 'badge-secondary' }}">
                                            {{ $data->status_assessment_one ?? '-' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">Assessment Two</td>
                                    <td class="text-right">
                                        <span class="badge badge-custom {{ $assessmentStatus[$data->status_assessment_two] ?? 'badge-secondary' }}">
                                            {{ $data->status_assessment_two ?? '-' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">Final Assessment</td>
                                    <td class="text-right">
                                        <span class="badge badge-custom {{ $assessmentStatus[$data->status_final_assessment] ?? 'badge-secondary' }}">
                                            {{ $data->status_final_assessment ?? '-' }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        {{-- col --}}
                    </div>
                    {{-- row --}}

                    {{-- 3. data participants --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-4">
                                <label for="participants_name_1">Participant Name 1 (Group Leader)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_1" id="participants_name_1" value="{{ $data->participants_name_1 ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_2">Participant Name 2(Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_2" id="participants_name_2" value="{{ $data->participants_name_2 ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_3">Participant Name 2 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_3" id="participants_name_3" value="{{ $data->participants_name_3 ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_4">Participant Name 4 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_4" id="participants_name_4" value="{{ $data->participants_name_4 ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_5">Participant Name 5 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_5" id="participants_name_5" value="{{ $data->participants_name_5 ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_country">Country</label>
                                <input type="text" class="form-control border-dark" name="participants_country" id="participants_country" value="{{ $data->participants_country ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_phone">Phone Number</label>
                                <input type="text" class="form-control border-dark" name="participants_phone" id="participants_phone" value="{{ $data->participants_phone ?? '-' }}" disabled>
                            </div>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}

                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}

    @include('templates.others.info')
@endsection
