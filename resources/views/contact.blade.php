@extends('layouts.app')

@section('content')
<div id="contactPage" class="bg-white">
    <section class="p-0">
        <img src="{{ asset('img/banner-contact.jpg') }}" alt="" class="w-100">
    </section>
    <section class="contactForm">
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">CONTACT US</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="text-uppercase">metaway holdings</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="label">Address 1</span>
                            <div>: 30 N Gould St Ste R Sheridan, Wyoming 82801, USA</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">Address 2</span>
                            <div>: 2323 Main Street Irvine, CA 92614, U.S.A.</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">Address 3</span>
                            <div>: CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">Email</span>
                            <div>: <a href="mailto:info@metawayholdings.com">info@metawayholdings.com</a> | <a href="mailto:info@metawayholdings.vn">info@metawayholdings.vn</a></div>
                        </li>
                        <li class="d-flex">
                            <span class="label">Website</span>
                            <div>: <a href="https://www.metawayholdings.com" target="_blank">www.metawayholdings.com</a> | <a href="https://www.metawayholdings.vn" target="_blank">www.metawayholdings.vn</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phone *</label>
                                <input type="text" class="form-control" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Message *</label>
                                <textarea class="form-control" placeholder="Enter Message" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btnRed text-uppercase">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="branch">
        <div class="container-lg">
            <div class="row g-0">
                <div class="col-md-3 item">
                    <img src="{{ asset('img/contact-img-1.jpg') }}" alt="" class="w-100">
                    <ul class="list-unstyled info mb-0">
                        <li class="d-flex">
                            <span class="label">A1:</span>
                            <div>30 N Gould St Ste R Sheridan, Wyoming 82801, USA</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">A2:</span>
                            <div>2323 Main Street Irvine, CA 92614, U.S.A.</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">E:</span>
                            <div><a href="mailto:info@metawayholdings.com">info@metawayholdings.com</a></div>
                        </li>
                        <li class="d-flex">
                            <span class="label">W:</span>
                            <div><a href="https://www.metawayholdings.com" target="_blank">www.metawayholdings.com</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 item">
                    <img src="{{ asset('img/contact-img-2.jpg') }}" alt="" class="w-100">
                    <ul class="list-unstyled info mb-0">
                        <li class="d-flex">
                            <span class="label">A1:</span>
                            <div>CX01 lot, Van Khe urban area, La Khe Ward, Ha Dong District, Hanoi, Vietnam</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">E:</span>
                            <div><a href="mailto:info@metawayholdings.vn">info@metawayholdings.vn</a></div>
                        </li>
                        <li class="d-flex">
                            <span class="label">W:</span>
                            <div><a href="https://www.metawayholdings.vn" target="_blank">www.metawayholdings.vn</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 item">
                    <img src="{{ asset('img/contact-img-3.jpg') }}" alt="" class="w-100">
                    <ul class="list-unstyled info mb-0">
                        <li class="d-flex">
                            <span class="label">A1:</span>
                            <div>International Plaza, 10 Anson Road, Singapore </div>
                        </li>
                        <li class="d-flex">
                            <span class="label">E:</span>
                            <div><a href="mailto:info@divega.com">info@divega.com</a></div>
                        </li>
                        <li class="d-flex">
                            <span class="label">W:</span>
                            <div><a href="https://www.divega.com" target="_blank">www.divega.com</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 item">
                    <img src="{{ asset('img/contact-img-4.jpg') }}" alt="" class="w-100">
                    <ul class="list-unstyled info mb-0">
                        <li class="d-flex">
                            <span class="label">A1:</span>
                            <div>116 Albert (City of Ottawa, Ontario), Canada</div>
                        </li>
                        <li class="d-flex">
                            <span class="label">E:</span>
                            <div><a href="mailto:info@rapitalbank.com">info@rapitalbank.com</a></div>
                        </li>
                        <li class="d-flex">
                            <span class="label">W:</span>
                            <div><a href="https://www.rapitalbank.com" target="_blank">www.rapitalbank.com</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-lg">
        <div class="lineSeparated"></div>
    </div>
</div>
@endsection

@push('script')
    
@endpush
