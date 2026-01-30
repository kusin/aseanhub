@extends('layouts.backend')

@section('nav-urban-design', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Show Data Urban Design
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
                <div class="card-header">
                    <span class="text-bold">Main Information</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tr>
                            <th width="25%">Team Name</th>
                            <td width="75%">{{ $data->participants->team_name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th width="25%">Country</th>
                            <td width="75%">{{ $data->participants->participants_country ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th width="25%">Design Title</th>
                            <td width="75%">{{ $data->design_title }}</td>
                        </tr>
                        <tr>
                            <th width="25%">Description</th>
                            <td width="75%">{!! nl2br(e($data->design_description)) !!}</td>
                        </tr>
                        <tr>
                            <th width="25%">Presentation Slides</th>
                            <td width="75%">
                                @if ($data->design_presentation)
                                    <a href="{{ asset('storage/' . $data->design_presentation) }}" class="btn btn-sm btn-outline-info" target="_blank">
                                        <i class="fa-solid fa-file-powerpoint mr-2"></i>Download
                                    </a>
                                @else
                                    <span class="text-danger">Not uploaded</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <small class="text-danger">
                        <div class="text-right">
                            Data Access {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </div>
                    </small>
                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}

    <div class="row">
        <div class="col-sm-6">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <span class="text-bold">Poster Images</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tr>
                            <td class="text-left">Image 1</td>
                            <td class="text-right">
                                @if ($data->images_1)
                                    <a href="{{ asset('storage/' . $data->images_1) }}" class="btn btn-sm btn-outline-info" target="_blank">
                                        <i class="fa-solid fa-download mr-2"></i> Download
                                    </a>
                                @else
                                    <span class="text-danger">Not uploaded</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Image 2</td>
                            <td class="text-right">
                                @if ($data->images_2)
                                    <a href="{{ asset('storage/' . $data->images_2) }}" class="btn btn-sm btn-outline-info" target="_blank">
                                        <i class="fa-solid fa-download mr-2"></i> Download
                                    </a>
                                @else
                                    <span class="text-danger">Not uploaded</span>
                                @endif
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Image 3</td>
                            <td class="text-right">
                                @if ($data->images_3)
                                    <a href="{{ asset('storage/' . $data->images_3) }}" class="btn btn-sm btn-outline-info" target="_blank">
                                        <i class="fa-solid fa-download mr-2"></i> Download
                                    </a>
                                @else
                                    <span class="text-danger">Not uploaded</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}

        <div class="col-sm-6">
            <div class="card card-danger card-outline">
                <div class="card-header">
                    <span class="text-bold">Demo Videos</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tr>
                            <td class="text-left">Video 1</td>
                            <td class="text-right">
                                @if ($data->videos_1)
                                    <a href="{{ $data->videos_1 }}" class="btn btn-sm btn-danger" target="_blank">
                                        <i class="fa-brands fa-youtube mr-2"></i>Open Youtube
                                    </a>
                                @else
                                    <span class="text-danger">Not provided</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Video 2</td>
                            <td class="text-right">
                                @if ($data->videos_2)
                                    <a href="{{ $data->videos_2 }}" class="btn btn-sm btn-danger" target="_blank">
                                        <i class="fa-brands fa-youtube mr-2"></i>Open Youtube
                                    </a>
                                @else
                                    <span class="text-danger">Not provided</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Video 3</td>
                            <td class="text-right">
                                @if ($data->videos_3)
                                    <a href="{{ $data->videos_3 }}" class="btn btn-sm btn-danger" target="_blank">
                                        <i class="fa-brands fa-youtube mr-2"></i>Open Youtube
                                    </a>
                                @else
                                    <span class="text-danger">Not provided</span>
                                @endif
                            </td>
                        </tr>
                    </table>
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
