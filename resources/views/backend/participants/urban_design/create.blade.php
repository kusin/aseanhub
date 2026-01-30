@extends('layouts.backend')

@section('nav-urban-design', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <i class="fa-solid fa-book mr-2"></i>
                    <span class="text-bold">
                        My Urban Design Submission
                    </span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('participants.urban-design.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @include('backend.participants.urban_design._form', [
                            'readonly' => false,
                        ])


                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{ route('participants.urban-design.index') }}" class="btn btn-block btn-secondary">
                                    <i class="fas fa-undo mr-2"></i>Back
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block btn-success" data-confirm data-icon="success" data-title="Confirmation" data-text="Are you sure want to save this data ?" data-confirm-text="Save" data-confirm-color="#28a745">
                                    <i class="fas fa-save mr-2"></i> Save
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
