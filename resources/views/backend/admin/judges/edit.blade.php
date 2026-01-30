@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-warning">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Edit Data Judges
                </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-warning">
                <div class="card-body">
                    <form action="{{ route('admin.judges.update', $data->id_judges) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        @include('backend.admin.judges._form', ['readonly' => false])


                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                                    <i class="fas fa-undo mr-2"></i>Back
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block btn-warning" data-confirm data-icon="warning" data-title="Confirmation" data-text="Are you sure want to update this data?" data-confirm-text="Edit" data-confirm-color="#ffc107">
                                    <i class="fas fa-edit mr-2"></i> Edit
                                </button>
                            </div>
                            {{-- col --}}
                        </div>
                        {{-- row --}}

                    </form>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <div class="text-right required">
                            Required fields. Please fill in the data correctly
                        </div>
                    </small>
                </div>
                {{-- card-footer --}}
            </div>
            {{-- card-success --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}
@endsection
@include('templates.sweetalert.scripts')
