@extends('layouts.app')

@section('content')
<div id="contactPage" class="bg-white">
    <section class="p-0">
        <div id="contact" class="carousel slide pt-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active container2">
                    <img src="{{ asset('img/banner-contact.png') }}" alt="" class="w-100">

                    <div class="content">
                        <h1>@lang ('CONTACT')</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgLocal">
        <div class="container-lg">
            <div class="row align-items-center p-4 contact-metaway">
                <h1 class="text-uppercase centered">Metaway Holdings</h1>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md p-3">
                            <h5 class="text-uppercase">@lang ('United States of America')</h5>
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
                        <div class="col-lg-6 col-md p-3">
                            <h5 class="text-uppercase">@lang ('VIETNAM')</h5>
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
                        <div class="col-lg-6 col-md p-3">
                            <h5 class="text-uppercase">SINGAPORE</h5>
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
                        <div class="col-lg-6 col-md p-3">
                            <h5 class="text-uppercase">CANADA</h5>
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
                            <button class="btn btnRed text-uppercase">@lang ('Submit')</button>
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