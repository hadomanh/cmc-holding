@extends('layouts.app')

@section('content')
<div id="contactPage" class="bg-white">
    <section class="banner p-0">
        <div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active container2">
                    <img src="{{ asset('img/banner-contact.png') }}" alt="" class="w-100">
                    <div class="content">
                        <h1>CONTACT</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgLocal">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <h2 class="text-uppercase centered">Metaway Holdings</h2>
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4 mb-4">
                            <h5 class="text-uppercase">United States of America</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}"></div>
                                <div class="ms-3 location1">
                                    <p class="d-block mb-2">30 N Gould St Ste R Sheridan, <br> Wyoming 82801 <br> 2323 Main Street Irvine, CA 92614 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="text-uppercase">VIETNAM</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}"></div>
                                <div class="ms-3 location1">
                                    <p class="d-block mb-2">CX01 lot, Van Khe urban area, La <br> Khe Ward, Ha Dong District, <br> Hanoi, Vietnam</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="text-uppercase">SINGAPORE</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}"></div>
                                <div class="ms-3 location2">
                                    <p class="d-block mb-2">International Plaza, 10 Anson Road, Singapore</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="text-uppercase">CANADA</h5>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconPosition.png') }}"></div>
                                <div class="ms-3 location2">
                                    <p class="d-block mb-2">116 Albert (City of Ottawa, Ontario), <br> Canada</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconGlobe.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">www.metawayholdings.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div><img src="{{ asset('img/iconLetter.png') }}"></div>
                                <div class="ms-3">
                                    <p class="d-block mb-2">info@metawayholdings.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ipBg">
                        <input type="text" class="form-control ipContact" placeholder="Your Name *">
                        <input type="email" class="form-control ipContact" placeholder="Your Email *">
                        <input type="text" class="form-control ipContact" placeholder="Your Phone Number *">
                        <textarea class="form-control ipContact" placeholder="Enter Message" rows="6" placeholder="Message *"></textarea>
                        <div class="text-center">
                            <button class="btn btnRed text-uppercase">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@push('script')

@endpush