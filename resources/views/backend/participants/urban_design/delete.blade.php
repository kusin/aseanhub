@extends('layouts.backend')

@section('nav-urban-design', 'active')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <i class="fa-solid fa-trash mr-2"></i>
                    <span class="text-bold">
                        My Urban Design Submission
                    </span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('participants.urban-design.destroy', $data->id_urban_design) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('DELETE')
                        @include('backend.participants.urban_design._form', [
                            'readonly' => true,
                            'data' => $data,
                        ])


                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{ route('participants.urban-design.index') }}" class="btn btn-block btn-secondary">
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
