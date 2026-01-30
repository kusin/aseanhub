@php
    $readonly = $readonly ?? false;
@endphp

{{-- 1. Team Name sampai Phone Number --}}
<div class="row border-bottom mb-3">
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="team_name" class="required">Team Name</label>
            <input type="text" class="form-control border-dark" name="team_name" id="team_name" value="{{ old('team_name', $data->team_name ?? '') }}" @if ($readonly) readonly @endif>
            @error('team_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="participants_name_1" class="required">Participant Name 1 (Group Leader)</label>
            <input type="text" class="form-control border-dark" name="participants_name_1" id="participants_name_1" value="{{ old('participants_name_1', $data->participants_name_1 ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_name_1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_name_2">Participant Name 2 (Member)</label>
            <input type="text" class="form-control border-dark" name="participants_name_2" id="participants_name_2" value="{{ old('participants_name_2', $data->participants_name_2 ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_name_2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_name_3">Participant Name 3 (Member)</label>
            <input type="text" class="form-control border-dark" name="participants_name_3" id="participants_name_3" value="{{ old('participants_name_3', $data->participants_name_3 ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_name_3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_name_4">Participant Name 4 (Member)</label>
            <input type="text" class="form-control border-dark" name="participants_name_4" id="participants_name_4" value="{{ old('participants_name_4', $data->participants_name_4 ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_name_4')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_name_5">Participant Name 5 (Member)</label>
            <input type="text" class="form-control border-dark" name="participants_name_5" id="participants_name_5" value="{{ old('participants_name_5', $data->participants_name_5 ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_name_5')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_country" class="required">Origin of Country</label>
            <select class="custom-select form-control border-dark" name="participants_country" id="participants_country" @if ($readonly) readonly @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.countries') as $country)
                    <option value="{{ $country }}" @selected(old('participants_country', $data->participants_country ?? '') === $country)>
                        {{ $country }}
                    </option>
                @endforeach
            </select>
            @error('participants_country')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="participants_phone" class="required">Phone Number</label>
            <input type="text" class="form-control border-dark" name="participants_phone" id="participants_phone" value="{{ old('participants_phone', $data->participants_phone ?? '') }}" @if ($readonly) readonly @endif>
            @error('participants_phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

{{-- 2. Status Registrasi - Final Assessment --}}
<div class="row border-bottom mb-3">
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="status_registration" class="required">Status Registration</label>
            <select class="custom-select form-control border-dark" name="status_registration" id="status_registration" @if ($readonly) disabled @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.registrations') as $registration)
                    <option value="{{ $registration }}" @selected(old('status_registration', $data->status_registration ?? '') === $registration)>
                        {{ $registration }}
                    </option>
                @endforeach
            </select>
            @error('status_registration')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="status_urban_design" class="required">Status Urban Design </label>
            <select class="custom-select form-control border-dark" name="status_urban_design" id="status_urban_design" @if ($readonly) disabled @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.urban_designs') as $urban_design)
                    <option value="{{ $urban_design }}" @selected(old('status_urban_design', $data->status_urban_design ?? '') === $urban_design)>
                        {{ $urban_design }}
                    </option>
                @endforeach
            </select>
            @error('status_urban_design')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="status_assessment_one" class="required">Assessment One</label>
            <select class="custom-select form-control border-dark" name="status_assessment_one" id="status_assessment_one" @if ($readonly) disabled @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.assessments') as $assessment)
                    <option value="{{ $assessment }}" @selected(old('status_assessment_one', $data->status_assessment_one ?? '') === $assessment)>
                        {{ $assessment }}
                    </option>
                @endforeach
            </select>
            @error('status_assessment_one')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="status_assessment_two" class="required">Assessment Two</label>
            <select class="custom-select form-control border-dark" name="status_assessment_two" id="status_assessment_two" @if ($readonly) disabled @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.assessments') as $assessment)
                    <option value="{{ $assessment }}" @selected(old('status_assessment_two', $data->status_assessment_two ?? '') === $assessment)>
                        {{ $assessment }}
                    </option>
                @endforeach
            </select>
            @error('status_assessment_two')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="status_final_assessment" class="required">Final Assessment</label>
            <select class="custom-select form-control border-dark" name="status_final_assessment" id="status_final_assessment" @if ($readonly) disabled @endif>
                <option value="" selected disabled></option>
                @foreach (config('participants.assessments') as $assessment)
                    <option value="{{ $assessment }}" @selected(old('status_final_assessment', $data->status_final_assessment ?? '') === $assessment)>
                        {{ $assessment }}
                    </option>
                @endforeach
            </select>
            @error('status_final_assessment')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

{{-- 3. Email + Password --}}
<div class="row border-bottom mb-3">
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="email" class="required">Email</label>
            <input type="email" class="form-control border-dark" name="email" id="email" value="{{ old('email', $data->email ?? '') }}" @if ($readonly) readonly @endif>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="password" class="required">Password</label>
            <input type="password" class="form-control border-dark" name="password" id="password" @if ($readonly) readonly @endif>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}
