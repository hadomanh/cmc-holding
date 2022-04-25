@extends('layouts.app')

@section('content')
<div id="mediaNews" class="bg-white">
    <section class="p-0">
        <img src="{{ asset('img/banner-press-1.jpg') }}" alt="" class="w-100">
    </section>
    <section>
        <div class="container-lg">
            <h2 class="sectionHeading text-uppercase centered">NEWS</h2>
            <div class="row">
                
                <div class="col-lg-6 col-12">

                    @if ($press->count() > 0)
                    <div class="pressItem highlight">
                        <a href="{{ route('media.press-detail', $press[0]->id) }}" class="pressThumb">
                            <img src="{{ $press[0]->thumbnail }}" alt="" class="w-100">
                        </a>
                        <h4 class="pressTitle titleUnderline">
                            <a href="{{ route('media.press-detail', $press[0]->id) }}">{{ $press[0]->title }}</a>
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
                            <a href="{{ route('media.press-detail', $item->id) }}" class="col-md-4 pressThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="pressTitle titleUnderline">
                                    <a href="{{ route('media.press-detail', $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="pressDesc">
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
                        @foreach ($press as $item)
                        @if ($loop->index >= ($press->count() - 1) / 2)
                        <li class="pressItem row">
                            <a href="{{ route('media.press-detail', $item->id) }}" class="col-md-4 pressThumb">
                                <img src="{{ $item->thumbnail }}" alt="" class="w-100">
                            </a>
                            <div class="col-md-8">
                                <h4 class="pressTitle titleUnderline">
                                    <a href="{{ route('media.press-detail', $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="pressDesc">
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
