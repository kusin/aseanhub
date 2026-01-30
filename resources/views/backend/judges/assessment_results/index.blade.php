@extends('layouts.backend')
@section('nav-assessment-results', 'active')
@section('content')



    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <i class="fa-solid fa-chart-simple mr-2"></i>
                    <span class="text-bold">The assessment criteria are as follows</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tbody>
                            <tr>
                                <td class="text-left text-bold">Criteria</td>
                                <td class="text-right text-bold">Percentage</td>
                            </tr>
                            <tr>
                                <td class="text-left">1. Design quality and urban integration</td>
                                <td class="text-right">30 %</td>
                            </tr>
                            <tr>
                                <td class="text-left">2. Innovation and originality</td>
                                <td class="text-right">25 %</td>
                            </tr>
                            <tr>
                                <td class="text-left">3. Sustainability</td>
                                <td class="text-right">20 %</td>
                            </tr>
                            <tr>
                                <td class="text-left">4. Feasibility</td>
                                <td class="text-right">15 %</td>
                            </tr>
                            <tr>
                                <td class="text-left">5. Presentation Quality</td>
                                <td class="text-right">10 %</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}



    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <i class="fa-solid fa-bars mr-2"></i>
                    <span class="text-bold">The assessment results</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        Coming soon - Under Construction
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatables">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">#</th>
                                    <th rowspan="2" style="vertical-align: middle;">Team Name</th>
                                    <th rowspan="2" style="vertical-align: middle;">Country</th>
                                    <th colspan="5" class="text-center">Assessment Criteria</th>
                                </tr>
                                <tr>
                                    <th class="text-center">1</th>
                                    <th class="text-center">2</th>
                                    <th class="text-center">3</th>
                                    <th class="text-center">4</th>
                                    <th class="text-center">5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}


@endsection
