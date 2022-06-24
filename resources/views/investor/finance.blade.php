@extends('layouts.app')

@section('content')
<div id="reportPage">
    <section class="banner finance">
        <div class="container-xxl">
            <h1 class="text-white mb-0 text-center">@lang ('ANNUAL FINANCE REPORT')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-xxl">
            <div class="nav nav-pills flex-column flex-sm-row" id="nav-tab" role="tablist">
                <button class="nav-link flex-sm-fill active" id="nav-internal-report-tab" data-bs-toggle="tab" data-bs-target="#nav-internal-report" type="button" role="tab" aria-controls="nav-internal-report" aria-selected="true">@lang ('Annual Finance Report')</button>
                <button class="nav-link flex-sm-fill" id="nav-finance-report-tab" data-bs-toggle="tab" data-bs-target="#nav-finance-report" type="button" role="tab" aria-controls="nav-finance-report" aria-selected="false">@lang ('Finance Report')</button>
                <button class="nav-link flex-sm-fill" id="nav-business-result-report-tab" data-bs-toggle="tab" data-bs-target="#nav-business-result-report" type="button" role="tab" aria-controls="nav-business-result-report" aria-selected="false">@lang ('Business Result Report')</button>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-internal-report" role="tabpanel" aria-labelledby="nav-internal-report-tab">
                    <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <th>TIME<i class="fas fa-arrow-down ms-2"></i></th>
                                <th>DOCUMENT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <tr>
                                <td>2018</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2019</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2020</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-finance-report" role="tabpanel" aria-labelledby="nav-finance-report-tab">
                    <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <th>TIME<i class="fas fa-arrow-down ms-2"></i></th>
                                <th>DOCUMENT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <tr>
                                <td>2018</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2019</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2020</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-business-result-report" role="tabpanel" aria-labelledby="nav-business-result-report-tab">
                    <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <th>TIME<i class="fas fa-arrow-down ms-2"></i></th>
                                <th>DOCUMENT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <tr>
                                <td>2018</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2019</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2020</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>
                                    @lang ('Finance Report')
                                </td>
                                <td>
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')

@endpush