@extends('layouts.app')

@section('content')
<div id="mediaNews">
    <section class="banner news">
        <div class="container-xxl">
            <h1 class="mb-0 text-white text-center text-uppercase">@lang ('investment news')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">NEWS</h2>
            <div class="row">
                <div class="col-lg-6 col-12">

                    @if ($news->count() > 0)
                    <div class="newsItem highlight">
                        <a href="{{ route('media.news-detail', $news[0]->slug) }}" class="newsThumb">
                            <img src="{{ $news[0]->thumbnail }}" alt="" class="w-100">
                        </a>
                        <h4 class="newsTitle">
                            <a href="{{ route('media.news-detail', $news[0]->slug) }}">{{ $news[0]->title }}</a>
                        </h4>
                        <div class="newsDesc">
                            {{ $news[0]->subtitle }}
                        </div>
                    </div>
                    @endif

                    <ul class="list-unstyled mb-0">
                        @foreach ($news as $item)
                        @if ($loop->index > 0 && $loop->index < ($news->count() - 1) / 2)
                        <li class="newsItem row">
                            <a href="{{ route('media.news-detail', $item->slug) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle">
                                    <a href="{{ route('media.news-detail', $item->slug) }}">{{ $item->title }}</a>
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
                        @foreach ($news as $item)
                        @if ($loop->index >= ($news->count() - 1) / 2)
                        <li class="newsItem row">
                            <a href="{{ route('media.news-detail', $item->slug) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle">
                                    <a href="{{ route('media.news-detail', $item->slug) }}">{{ $item->title }}</a>
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
