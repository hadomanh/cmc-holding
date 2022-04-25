        @extends('layouts.app')

@section('content')
<div id="mediaNews" class="bg-white">
    <section class="investor-detail">
        <div class="container-lg">
            <div class="row title-investor">
                <div class="col-lg-8 col-12">
                    {!! $investorNews->content !!}
                </div>
                <div class="col-lg-4 col-12">
                    <div class="title-investor-detail col-12">
                        <h4><a href="">{{ __('Read more') }}</a></h4>
                    </div>

                    @foreach ($relatedNews as $item)
                        <a href="{{ route('media.investor-detail', $item->id) }}">
                            <div class="d-flex mt-4">
                                <div class="col-4">
                                    <img src="{{ $item->thumbnail }}" alt="" class="icon-detail">
                                </div>
                                <div class="col-8">
                                    <h4>{{ $item->title }}</h4>
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
