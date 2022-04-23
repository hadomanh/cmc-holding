@extends('layouts.app')

@section('content')
<div id="mediaNews" class="bg-white">
    <section class="p-0">
        <div class="carousel-item active container2">
            <img src="{{ asset('img/Investor-news.png') }}" alt="" class="w-100">
            <div class="content"><h1>INVESTMENT NEWS</h1></div>
        </div>
        <img src="{{ asset('img/Investor-news.png') }}" alt="" class="w-100">
    </section>
    <section class="investor">
        <div class="container-lg  title-investor" >
            <div class="row">
                 <div class="col-lg-8 col-12">
                    <a href="{{ route('media.investor-detail') }}">
                        <img src="{{ asset('img/Img-investor.png') }}" alt="" class="w-100">
                        <div class="mt-3">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <span class="miniSize">2022-01-19</span>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12">
                    <a href="">
                        <div class="d-flex mb-4">
                            <img src="{{ asset('img/Frame-1.png') }}" alt="">
                            <div class="ms-4">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <span class="miniSize">2022-01-19</span>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex mb-4">
                            <img src="{{ asset('img/Frame-2.png') }}" alt="">
                            <div class="ms-4">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <span class="miniSize">2022-01-19</span>
                        </div>
                    </div>
                   </a>
                    <a href="">
                    <div class="d-flex mb-4">
                            <img src="{{ asset('img/Frame-3.png') }}" alt="">
                        <div class="ms-4">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <span class="miniSize">2022-01-19</span>
                        </div>
                    </div>
                    </a>
                    <a href="">
                    <div class="d-flex mb-4">
                        <img src="{{ asset('img/Frame-4.png') }}" alt="">>
                        <div class="ms-4">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <span class="miniSize">2022-01-19</span>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <a href="">
                <div class="row pt-4 title-investor">
                    <div class="col-12 col-lg-6"><img src="{{ asset('img/Img-investor-1.png') }}" alt="" class="w-100"></div>
                    <div class="col-12 col-lg-6"> 
                        <div class="mt-3">
                        <h4> Lorem ipsum dolor sit amet, consectetur </h4>
                        <span class="miniSize">2022-01-19</span>
                        <p  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </a>
           <a href="">
               <div class="row pt-4">
                    <div class="col-12 col-lg-6"><img src="{{ asset('img/Img-investor-2.png') }}" alt="" class="w-100"></div>
                    <div class="col-12 col-lg-6"> 
                        <div class="mt-3">
                            <h4> Lorem ipsum dolor sit amet, consectetur</h4>
                            <span class="miniSize">2022-01-19</span>
                            <p  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="row pt-4"> 
                    <div class="col-12 col-lg-6"><img src="{{ asset('img/Img-investor-3.png') }}" alt="" class="w-100"></div>
                    <div class="col-12 col-lg-6"> 
                        <div class="mt-3">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                            <span class="miniSize">2022-01-19</span>
                            <p  class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div> 
            </a>
        </div>
    </section>
    <!-- <section>
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">INVESTMENT NEWS</h2>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="newsItem highlight">
                        <a href="#" class="newsThumb">
                            <img src="{{ asset('img/news-img-1.jpg') }}" alt="" class="w-100">
                        </a>
                        <h4 class="newsTitle titleUnderline">
                            <a href="#">What is Lorem Ipsum?</a>
                        </h4>
                        <div class="newsDesc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting...
                        </div>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12">
                    <ul class="list-unstyled mb-0">
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                        <li class="newsItem row">
                            <a href="#" class="col-md-4 newsThumb">
                                <img src="{{ asset('img/news-img-2.jpg') }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="#">What is Lorem Ipsum?</a>
                                </h4>
                                <div class="newsDesc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </div>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <div class="container-lg">
        <div class="lineSeparated"></div>
    </div> -->
</div>
@endsection

@push('script')
    
@endpush
