@extends('layouts.app')

@section('content')
<div id="contactPage">
    <section class="banner">
        <div class="container-xxl">
            <h1 class="mb-0 text-white text-center">@lang ('CONTACT')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-xxl">
            <div class="row align-items-center p-4">                
                <div class="col-md-6">
                    <h2 class="sectionHeading fs-2 mb-3">Metaway Holdings</h2>
                    <div class="row info">
                        <div class="col-lg-6 col-md">
                            <h5 class="text-uppercase fs-6">@lang ('United States of America')</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}" class="w-100"></div>
                                <div class="ms-3 location1">
                                    <p class="d-block mb-2">30 N Gould St Ste R Sheridan, <br> Wyoming 82801 <br> 2323 Main Street Irvine, CA 92614 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md">
                            <h5 class="text-uppercase fs-6">@lang ('VIETNAM')</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}" class="w-100"></div>
                                <div class="ms-3 location1">
                                    <p class="d-block mb-2">@lang ('CX01 lot, Van Khe urban area, La <br> Khe Ward, Ha Dong District,') <br> @lang ('Hanoi, Vietnam')</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md mt-4">
                            <h5 class="text-uppercase fs-6">SINGAPORE</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}" class="w-100"></div>
                                <div class="ms-3 location2">
                                    <p class="d-block mb-2">International Plaza, 10 Anson Road, Singapore</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md mt-4">
                            <h5 class="text-uppercase fs-6">CANADA</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}" class="w-100"></div>
                                <div class="ms-3 location2">
                                    <p class="d-block mb-2">116 Albert (City of Ottawa, Ontario), Canada</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}" class="w-100"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ipBg">
                        <input type="text" class="form-control ipContact" placeholder="@lang ('Your Name') *">
                        <input type="email" class="form-control ipContact" placeholder="@lang ('Your Email') *">
                        <input type="text" class="form-control ipContact" placeholder="@lang ('Your Phone Number') *">
                        <textarea class="form-control ipContact" placeholder="@lang ('Enter Message')" rows="6" placeholder="Message *"></textarea>
                        <div class="text-center">
                            <button class="btn btnRed text-uppercase text-white">@lang ('Submit')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')

@endpush