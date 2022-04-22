    @extends('layouts.app')

@section('content')
<div id="mediaNews" class="bg-white">
    <section class="investor-detail">
        <div class="container-lg">
            <div class="row title-investor">
                 <div class="col-lg-8 col-12">
                     <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </h3>
                     <span class="miniSize">2022-01-19</span><br>
                     <p class="title-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                     <p> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                         eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                          quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                           Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
                           incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                           suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
                           quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                    <img src="{{ asset('img/Img-investor.png') }}" alt="" class="img-detail">
                    <p>is et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
                        sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                        consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui 
                        dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        <img src="{{ asset('img/Ong-Tran-Nam-Chung-chu-tich.png') }}" alt="" class="img-detail">
                   <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                         aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                         ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                          quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                          consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
                          eum fugiat quo voluptas nulla pariatur?"</p>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="title-investor-detail col-12">
                        <h4><a href="">Xem nhiều</a></h4>
                    </div>
                    <a href="">
                        <div class="d-flex mt-4">
                            <div class="col-4">
                                <img src="{{ asset('img/Frame-1.png') }}" alt="" class="icon-detail">
                            </div>
                            <div class="col-8">
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                                <span class="miniSize">2022-01-19</span>
                            </div>
                        </div>
                    </a> 
                    <a href="">
                        <div class="d-flex mt-4">
                            <div class="col-4">
                                <img src="{{ asset('img/Frame-2.png') }}" alt="" class="icon-detail">
                            </div>
                            <div class="col-8">
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                                <span class="miniSize">2022-01-19</span>
                            </div>
                        </div>
                    </a> 
                    <a href="">
                        <div class="d-flex mt-4">
                            <div class="col-4">
                                <img src="{{ asset('img/Frame-3.png') }}" alt="" class="icon-detail">
                            </div>
                            <div class="col-8">
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                                <span class="miniSize">2022-01-19</span>
                            </div>
                        </div>
                    </a> 
                    <a href="">
                        <div class="d-flex mt-4">
                            <div class="col-4">
                                <img src="{{ asset('img/Frame-4.png') }}" alt="" class="icon-detail">
                            </div>
                            <div class="col-8">
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                                <span class="miniSize">2022-01-19</span>
                            </div>
                        </div>
                    </a> 
                    <!-- <div class="d-flex mt-4">
                        <div >
                            <img src="{{ asset('img/Frame-2.png') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4><a href="">  Lorem ipsum dolor sit amet, consectetur</a> </h4>
                            <span class="miniSize">2022-01-19</span>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <img src="{{ asset('img/Frame-3.png') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4><a href="">  Lorem ipsum dolor sit amet, consectetur</a> </h4>
                            <span class="miniSize">2022-01-19</span>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <img src="{{ asset('img/Frame-4.png') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4><a href="">  Lorem ipsum dolor sit amet, consectetur</a> </h4>
                            <span class="miniSize">2022-01-19</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
