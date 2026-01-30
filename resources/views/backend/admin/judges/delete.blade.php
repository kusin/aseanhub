@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="callout callout-danger">
                <span class="text-dark">
                    <i class="fa-solid fa-book mr-2"></i>Delete Data Judges
                </span>
            </div>
            {{-- callout --}}
        </div>
        {{-- col --}}
    </div>
    {{-- row --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-danger">
                <div class="card-body">
                    <form action="{{ route('admin.judges.destroy', $data->id_judges) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('DELETE')
                        @include('backend.admin.judges._form', ['readonly' => true])

                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                                    <i class="fas fa-undo mr-2"></i>Back
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block btn-danger" data-confirm data-icon="error" data-title="Confirmation" data-text="This data will be permanently deleted" data-confirm-text="Delete" data-confirm-color="#dc3546">
                                    <i class="fas fa-trash-can mr-2"></i> Delete
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
