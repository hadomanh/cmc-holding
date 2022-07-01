@extends('layouts.app')

@section('content')
<div id="mediaNews">
    <section class="banner">
        <div class="container-xxl">
            <h1 class="mb-0 text-white text-center">@lang ('INVESTMENT NEWS')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-6 col-12">
                    @if ($investorNews->count() > 0)
                    <div class="newsItem highlight">
                        <a href="{{ route('media.news-detail', $investorNews[0]->id) }}" class="newsThumb">
                            <img src="{{ $investorNews[0]->thumbnail }}" alt="" class="w-100">
                        </a>
                        <h4 class="newsTitle">
                            <a href="{{ route('media.news-detail', $investorNews[0]->id) }}">{{ $investorNews[0]->title }}</a>
                        </h4>
                        <div class="newsDesc">
                            {{ $investorNews[0]->subtitle }}
                        </div>
                    </div>
                    @endif

                    <ul class="list-unstyled mb-0">
                        @foreach ($investorNews as $item)
                        @if ($loop->index > 0 && $loop->index < ($investorNews->count() - 1) / 2)
                        <li class="newsItem row">
                            <a href="{{ route('media.news-detail', $item->id) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle">
                                    <a href="{{ route('media.news-detail', $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="newsDesc">
                                    {{ $item->subtitle }}
                                </div>  
                                <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-6 col-12">
                    <ul class="list-unstyled mb-0">
                        @foreach ($investorNews as $item)
                        @if ($loop->index >= ($investorNews->count() - 1) / 2)
                        <li class="newsItem row">
                            <a href="{{ route('media.news-detail', $item->id) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle">
                                    <a href="{{ route('media.news-detail', $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="newsDesc">
                                    {{ $item->subtitle }}
                                </div>  
                                <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
