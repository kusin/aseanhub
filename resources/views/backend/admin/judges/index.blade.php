@extends('layouts.backend')

{{-- push styles --}}
@include('templates.datatables.styles')
@include('templates.notify.styles')

@section('nav-judges', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data" data-status="{{ session('notify.status') }}" data-text="{{ session('notify.text') }}"></div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>All Data Judges
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
                    <a href="{{ route('admin.judges.create') }}" class="btn btn-success">Add Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatables">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Institution</th>
                                    <th class="text-left">Country</th>
                                    <th class="text-left">Task</th>
                                    <th class="text-center text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $item)
                                    <tr>
                                        <td class="text-center">{{ number_format($loop->iteration) }}</td>
                                        <td class="text-left">{{ $item->judges_name ?? '-' }}</td>
                                        <td class="text-left">{{ $item->origin_institution ?? '-' }}</td>
                                        <td class="text-left">{{ $item->origin_country ?? '-' }}</td>
                                        <td class="text-left">{{ $item->judges_task ?? '-' }}</td>
                                        <td class="text-center text-nowrap">
                                            <a href="{{ route('admin.judges.show', $item->id_judges) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-display"></i></a>
                                            <a href="{{ route('admin.judges.edit', $item->id_judges) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                                            <a href="{{ route('admin.judges.delete', $item->id_judges) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-danger">Data not available</td>
                                    </tr>
                                @endforelse
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

{{-- push scripts --}}
@include('templates.datatables.scripts')
@include('templates.notify.scripts')
