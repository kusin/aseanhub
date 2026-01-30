@extends('layouts.backend')

@section('nav-urban-design', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <i class="fa-solid fa-pen mr-2"></i>
                    <span class="text-bold">
                        My Urban Design Submission
                    </span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('participants.urban-design.update', $data->id_urban_design) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        @include('backend.participants.urban_design._form', [
                            'readonly' => false,
                            'data' => $data,
                        ])


                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{ route('participants.urban-design.index') }}" class="btn btn-block btn-secondary">
                                    <i class="fas fa-undo mr-2"></i>Back
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block btn-warning" data-confirm data-icon="warning" data-title="Confirmation" data-text="Are you sure want to update this data?" data-confirm-text="Edit" data-confirm-color="#fec107">
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
