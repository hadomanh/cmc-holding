@extends('layouts.app')

@section('content')
<div id="reportPage">
    <section class="banner internal text-center">
        <div class="container-xxl">
            <h1 class="mb-0 text-white">@lang ('INTERNAL REPORT')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-xxl">
            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <thead>
                        <tr>
                            <th>@lang ('TIME')<i class="fas fa-arrow-down ms-2"></i></th>
                            <th>@lang ('DOCUMENT')</th>
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
    </section>
</div>
@endsection

@push('script')
    
@endpush
