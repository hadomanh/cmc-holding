@extends('layouts.app')

@section('content')
<div id="reportPage">
    <section class="banner p-0">
        <img src="{{ asset('img/banner-report.jpg') }}" alt="" class="w-100">
    </section>
    <section class="bg-white">
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">ANNUAL FINANCE REPORT</h2>
            <div class="row g-0 reportNav">
                <nav class="col">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-internal-report-tab" data-bs-toggle="tab" data-bs-target="#nav-internal-report" type="button" role="tab" aria-controls="nav-internal-report" aria-selected="true">Annual Finance Report</button>
                        <button class="nav-link" id="nav-finance-report-tab" data-bs-toggle="tab" data-bs-target="#nav-finance-report" type="button" role="tab" aria-controls="nav-finance-report" aria-selected="false">Finance Report</button>
                        <button class="nav-link" id="nav-business-result-report-tab" data-bs-toggle="tab" data-bs-target="#nav-business-result-report" type="button" role="tab" aria-controls="nav-business-result-report" aria-selected="false">Business Result Report</button>
                    </div>
                </nav>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>2022</option>
                        <option value="1">2021</option>
                        <option value="2">2020</option>
                        <option value="3">2019</option>
                    </select>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-internal-report" role="tabpanel" aria-labelledby="nav-internal-report-tab">
                    <table class="table align-middle">
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-finance-report" role="tabpanel" aria-labelledby="nav-finance-report-tab">
                    <table class="table align-middle">
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-business-result-report" role="tabpanel" aria-labelledby="nav-business-result-report-tab">
                    <table class="table align-middle">
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('img/icon-folder.png') }}" alt=""></td>
                            <td>
                                <div class="fw-bold">Internal Report</div>
                                <div>28 Feb 2022</div>
                            </td>
                            <td>
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
