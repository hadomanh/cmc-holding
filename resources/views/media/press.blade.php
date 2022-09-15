@extends('layouts.app')

@section('content')
<div id="mediaNews">
    <section class="banner news">
        <div class="container-xxl">
            <h1 class="mb-0 text-white text-center">@lang ('PRESS RELEASE')</h1>
        </div>
    </section>
    <section class="bgGrey">
        <div class="container-xxl">
            <h2 class="sectionHeading text-uppercase centered">@lang ('PRESS RELEASE')</h2>
            <div class="row">
                <div class="col-lg-6 col-12">
                    @if ($press->count() > 0)
                    <div class="pressItem highlight">
                        <a href="{{ route('media.press-detail', $press[0]->slug) }}" class="pressThumb">
                            <img src="{{ $press[0]->thumbnail }}" alt="" class="w-100">
                        </a>
                        <h4 class="pressTitle">
                            <a href="{{ route('media.press-detail', $press[0]->slug) }}">{{ $press[0]->title }}</a>
                        </h4>
                        <div class="pressDesc">
                            {{ $press[0]->subtitle }}
                        </div>
                    </div>
                    @endif

                    <ul class="list-unstyled mb-0">
                        @foreach ($press as $item)
                        @if ($loop->index > 0 && $loop->index < ($press->count() - 1) / 2)
                        <li class="pressItem row">
                            <a href="{{ route('media.press-detail', $item->slug) }}" class="col-md-4 pressThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="">
                                    <a href="{{ route('media.press-detail', $item->slug) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="pressDesc">
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
                        @foreach ($press as $item)
                        @if ($loop->index >= ($press->count() - 1) / 2)
                        <li class="pressItem row">
                            <a href="{{ route('media.press-detail', $item->slug) }}" class="col-md-4 pressThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="pressTitle">
                                    <a href="{{ route('media.press-detail', $item->slug) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="pressDesc">
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
