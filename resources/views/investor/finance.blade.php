@extends('layouts.app')

@section('content')
<div id="reportPage">
    <section class="banner finance">
        <div class="container-xxl">
            <h1 class="text-white mb-0 text-center">@lang ('ANNUAL FINANCE REPORT')</h1>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-lg">
            <!-- <h2 class="sectionHea/ding text-uppercase centered">ANNUAL FINANCE REPORT</h2> -->
            <div class="row g-0 reportNav">
                <nav class="col d-flex justify-content-center">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-internal-report-tab" data-bs-toggle="tab" data-bs-target="#nav-internal-report" type="button" role="tab" aria-controls="nav-internal-report" aria-selected="true">@lang ('Annual Finance Report')</button>
                        <button class="nav-link" id="nav-finance-report-tab" data-bs-toggle="tab" data-bs-target="#nav-finance-report" type="button" role="tab" aria-controls="nav-finance-report" aria-selected="false">@lang ('Finance Report')</button>
                        <button class="nav-link" id="nav-business-result-report-tab" data-bs-toggle="tab" data-bs-target="#nav-business-result-report" type="button" role="tab" aria-controls="nav-business-result-report" aria-selected="false">@lang ('Business Result Report')</button>
                    </div>
                </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-internal-report" role="tabpanel" aria-labelledby="nav-internal-report-tab">
                    <table class="table align-middle">
                        <tr class="bgRed">
                            <td style="border-top-left-radius: 6px;">
                                <div class="fw-bold text-white">TIME<i class="fas fa-arrow-down ms-2"></i></div>
                            </td>
                            <td class="text-white fw-bold">DOCUMENT</td>
                            <td style="border-top-right-radius: 6px;">
                                <a href=""><i class="far fa-sticky-note"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2018</td>
                            <td>
                                <div>@lang ('Finance Report')</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2019</td>
                            <td>
                                <div>@lang ('Finance Report')</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2020</td>
                            <td>
                                <div>@lang ('Finance Report')</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2021</td>
                            <td>
                                <div>@lang ('Finance Report')</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <!-- <tr class="bgGrey">
                            <td>2026</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr> -->
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-finance-report" role="tabpanel" aria-labelledby="nav-finance-report-tab">
                    <table class="table align-middle">
                        <tr class="bgRed">
                            <td style="border-top-left-radius: 6px;">
                                <div class="fw-bold text-white">TIME<i class="fas fa-arrow-down ms-2"></i></div>
                            </td>
                            <td class="text-white fw-bold">DOCUMENT</td>
                            <td style="border-top-right-radius: 6px;">
                                <a href=""><i class="far fa-sticky-note"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2018</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2019</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2020</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2021</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <!-- <tr class="bgGrey">
                            <td>2026</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr> -->
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-business-result-report" role="tabpanel" aria-labelledby="nav-business-result-report-tab">
                    <table class="table align-middle">
                        <tr class="bgRed">
                            <td style="border-top-left-radius: 6px;">
                                <div class="fw-bold text-white">TIME<i class="fas fa-arrow-down ms-2"></i></div>
                            </td>
                            <td class="text-white fw-bold">DOCUMENT</td>
                            <td style="border-top-right-radius: 6px;">
                                <a href=""><i class="far fa-sticky-note"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2018</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2019</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgGrey">
                            <td>2020</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr class="bgdarkGrey">
                            <td>2021</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <!-- <tr class="bgGrey">
                            <td>2026</td>
                            <td>
                                <div>Finance Report</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')

@endpush