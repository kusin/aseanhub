@extends('layouts.backend')

@include('templates.datatables.styles')
@include('templates.notify.styles')
@section('nav-urban-design', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data" data-status="{{ session('notify.status') }}" data-text="{{ session('notify.text') }}">
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-bold">
                    <i class="fa-solid fa-book mr-2"></i>My Urban Design Submission
                </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <a href="{{ route('participants.urban-design.create') }}" class="btn btn-success">Add Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatables">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">No</th>
                                    <th rowspan="2" style="vertical-align: middle;">Team Name</th>
                                    <th colspan="3" class="text-center">Images</th>
                                    <th colspan="3" class="text-center">Videos</th>
                                    <th rowspan="2" style="vertical-align: middle;">Action</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ number_format($loop->iteration) }}</td>
                                        <td>{{ $item->participants->team_name ?? '-' }}</td>
                                        <td class="text-center">
                                            @if (!empty($item->images_1))
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if (!empty($item->images_2))
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if (!empty($item->images_3))
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($item->videos_1)
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($item->videos_2)
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($item->videos_3)
                                                <i class="fa-solid fa-check text-success"></i>
                                            @else
                                                <i class="fa-solid fa-xmark text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center text-nowrap">
                                            <a href="{{ route('participants.urban-design.show', $item->id_urban_design) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('participants.urban-design.edit', $item->id_urban_design) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                                            <a href="{{ route('participants.urban-design.delete', $item->id_urban_design) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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

@endsection
@include('templates.datatables.scripts')
@include('templates.notify.scripts')
