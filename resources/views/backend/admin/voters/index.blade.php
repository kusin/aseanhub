@extends('layouts.backend')

@include('templates.datatables.styles')
@section('nav-voters', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-info">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>All Data Voters
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
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatables">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>IP Address</th>
                                    <th>MAC Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ number_format($loop->iteration) }}</td>
                                        <td>{{ $item->email ?? '-' }}</td>
                                        <td>{{ $item->voters_name ?? '-' }}</td>
                                        <td>{{ $item->voters_country ?? '-' }}</td>
                                        <td>{{ $item->ip_address ?? '-' }}</td>
                                        <td>{{ $item->mac_address ?? '-' }}</td>
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
