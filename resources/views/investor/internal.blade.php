@extends('layouts.app')

@section('content')
<div id="reportPage">
    <section class="banner p-0">
        <div id="annual" class="carousel slide pt-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active container2">
                    <img src="{{ asset('img/banner-internal.png') }}" alt="" class="w-100">
                        <div class="content">
                            <h1>INTERNAL REPORT</h1>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-white">
        <div class="container-lg">
            <!-- <h2 class="sectionHeading text-uppercase centered">FINANCE REPORT</h2> -->
            <div class="row g-0 reportNav">
                <nav class="col">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-internal-report-tab" data-bs-toggle="tab" data-bs-target="#nav-internal-report" type="button" role="tab" aria-controls="nav-internal-report" aria-selected="true">Internal Report</button>
                    </div>
                </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-internal-report" role="tabpanel" aria-labelledby="nav-internal-report-tab">
                <table class="table align-middle">
                        <tr class="bgRed">
                            <td>
                                <div class="fw-bold text-white">TIME<i class="fas fa-arrow-down ms-2"></i></div>
                            </td>
                            <td class="text-white fw-bold">DOCUMENT</td>
                            <td>
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
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
