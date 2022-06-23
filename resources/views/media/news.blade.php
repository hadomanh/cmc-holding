@extends('layouts.app')

@section('content')
<div id="mediaNews" class="bg-white">
    <section class="p-0">
        <img src="{{ asset('img/banner-news-1.jpg') }}" alt="" class="w-100">
    </section>
    <section>
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">NEWS</h2>
            <div class="row">
                <div class="col-lg-6 col-12">

                    @if ($news->count() > 0)
                    <div class="newsItem highlight">
                        <a href="{{ route('media.news-detail', $news[0]->id) }}" class="newsThumb">
                            <img src="{{ $news[0]->thumbnail }}" alt="" class="w-100">
                        </a>
                        <h4 class="newsTitle titleUnderline">
                            <a href="{{ route('media.news-detail', $news[0]->id) }}">{{ $news[0]->title }}</a>
                            <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
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
                            <a href="{{ route('media.news-detail', $item->id) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="{{ route('media.news-detail', $item->id) }}">{{ $item->title }}</a>
                                    <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
                                </h4>
                                <div class="newsDesc">
                                    {{ $item->subtitle }}
                                </div>  
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
                            <a href="{{ route('media.news-detail', $item->id) }}" class="col-md-4 newsThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="newsTitle titleUnderline">
                                    <a href="{{ route('media.news-detail', $item->id) }}">{{ $item->title }}</a>
                                    <span class="miniSize">{{ date('Y-m-d', strtotime($item->created_at)) }}</span>
                                </h4>
                                <div class="newsDesc">
                                    {{ $item->subtitle }}
                                </div>  
                            </div>
                        </li>
                        @endif
                        @endforeach
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
