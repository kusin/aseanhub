@php
    $readonly = $readonly ?? false;
@endphp

<div class="row border-bottom mb-3">
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="design_title" class="required">Design Title</label>
            <input type="text" class="form-control border-dark" name="design_title" id="design_title" placeholder="Maximum 15 words" value="{{ old('design_title', $data->design_title ?? '') }}" {{ $readonly ? 'disabled' : '' }}>

            @error('design_title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label for="design_description" class="required">Design Description</label>
            <textarea class="form-control border-dark" name="design_description" id="design_description" placeholder="Maximum 3 paragraphs" rows="12" {{ $readonly ? 'disabled' : '' }}>{{ old('design_description', $data->design_description ?? '') }}</textarea>
            @error('design_description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row border-bottom mb-3">
    <div class="col-sm-12">
        <div class="form-group mb-4">
            <label for="design_presentation" class="required">Presentation Slides</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="design_presentation" id="design_presentation" {{ $readonly ? 'disabled' : '' }}>
                <label class="custom-file-label border-dark">Choose file</label>
            </div>
            <small class="text-muted">Accepted format: PDF, PPTX, ODP. Max 10MB</small>
            @error('design_presentation')
                <br>
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label class="required">Poster Image 1</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images_1" {{ $readonly ? 'disabled' : '' }}>
                <label class="custom-file-label border-dark">Choose file</label>
            </div>
            <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
            @error('images_1')
                <br>
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label>Poster Image 2</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images_2" {{ $readonly ? 'disabled' : '' }}>
                <label class="custom-file-label border-dark">Choose file</label>
            </div>
            <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
            @error('images_2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label>Poster Image 3</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="images_3" {{ $readonly ? 'disabled' : '' }}>
                <label class="custom-file-label border-dark">Choose file</label>
            </div>
            <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
            @error('images_3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label for="videos_1" class="required">Link Youtube 1</label>
            <input type="text" class="form-control border-dark" name="videos_1" id="videos_1" value="{{ old('videos_1', $data->videos_1 ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('videos_1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label for="videos_2">Link Youtube 2</label>
            <input type="text" class="form-control border-dark" name="videos_2" id="videos_2" value="{{ old('videos_2', $data->videos_2 ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('videos_2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-4">
            <label for="videos_3">Link Youtube 3</label>
            <input type="text" class="form-control border-dark" name="videos_3" id="videos_3" value="{{ old('videos_3', $data->videos_3 ?? '') }}" {{ $readonly ? 'disabled' : '' }}>
            @error('videos_3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
