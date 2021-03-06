@extends('layouts.app')

@section('content')
<div id="mediaNews">
    <section class="investor-detail bgGrey">
        <div class="container-xxl">
            <div class="row title-investor">
                <div class="col-lg-8 col-12 text-left">
                    <h3>{!! $press->title !!}</h3>
                    <br>
                    {!! $press->content !!}
                </div>
                <div class="col-lg-4 col-12">
                    <div class="title-investor-detail col-12">
                        <h4><a href="">{{ __('Read more') }}</a></h4>
                    </div>

                    @foreach ($relatedPress as $item)
                        <a href="{{ route('media.news-detail', $item->id) }}">
                            <div class="d-flex mt-4">
                                <div class="col-4">
                                    <img src="{{ $item->thumbnail }}" alt="" class="icon-detail">
                                </div>
                                <div class="col-8">
                                    <strong style="
                                        text-align: left;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        line-clamp: 3; 
                                        -webkit-box-orient: vertical;
                                    ">{{ $item->title }}</strong>
                                    <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
