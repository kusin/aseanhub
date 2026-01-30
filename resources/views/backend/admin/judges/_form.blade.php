@php
    $readonly = $readonly ?? false;
@endphp

<div class="row border-bottom mb-3">
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="judges_name" class="required">Judges Name</label>
            <input type="text" class="form-control border-dark" name="judges_name" id="judges_name" value="{{ old('judges_name', $data->judges_name ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('judges_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="origin_country" class="required">Origin of Country</label>
            <select class="custom-select form-control border-dark" name="origin_country" id="origin_country" {{ $readonly ? 'disabled' : '' }}>
                <option value="" selected disabled></option>
                @foreach (config('judges.countries') as $country)
                    <option value="{{ $country }}" @selected(old('origin_country', $data->origin_country ?? '') === $country)>
                        {{ $country }}
                    </option>
                @endforeach
            </select>
            @error('origin_country')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="origin_institution" class="required">Origin of Institution</label>
            <input type="text" class="form-control border-dark" name="origin_institution" id="origin_institution" value="{{ old('origin_institution', $data->origin_institution ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('origin_institution')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="judges_task" class="required">Task of Judges</label>
            <select class="custom-select form-control border-dark" name="judges_task" id="judges_task" {{ $readonly ? 'disabled' : '' }}>
                <option value="" selected disabled></option>
                @foreach (config('judges.tasks') as $task)
                    <option value="{{ $task }}" @selected(old('judges_task', $data->judges_task ?? '') === $task)>
                        {{ $task }}
                    </option>
                @endforeach
            </select>
            @error('judges_task')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="judges_photo" class="required">Photo of Judges</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="judges_photo" id="judges_photo" {{ $readonly ? 'disabled' : '' }}>
                <label class="custom-file-label border-dark" for="judges_photo">Choose file</label>
            </div>
            @error('judges_photo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
{{-- row --}}

<div class="row border-bottom mb-3">
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="email" class="required">Email</label>
            <input type="email" class="form-control border-dark" name="email" id="email" value="{{ old('email', $data->email ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-4">
            <label for="password" class="required">Password</label>
            <input type="password" class="form-control border-dark" name="password" id="password" {{ $readonly ? 'disabled' : '' }}>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    {{-- col --}}
</div>
{{-- row --}}
