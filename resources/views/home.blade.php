@extends('layout.master')

@section('content')
    <!-- goods blog -->
    <div class="blog-list">
        <div class="row p-0 m-0">
            @foreach ($goods as $g)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="rounded bg-card">
                        @php
                            $imageUrls = json_decode($g->goodImages->first()->image, true);
                        @endphp
                        @if (!empty($imageUrls))
                            @foreach (array_slice($imageUrls, 0, 1) as $imageUrl)
                                <img class="rounded img-fluid" src="{{ Voyager::image($imageUrl) }}" alt="">
                            @endforeach
                        @endif
                        <div class="p-4 text-white">
                            <h4 class="text-white">{!! $g->name !!}</h4>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-happy-heart-eyes'></i></span> : 100</button>
                                <button class="btn btn-dark"><span class="text-success"><i class='bx bx-heart'></i></span> :
                                    100</button>
                                <button class="btn btn-dark"><span class="text-success"><i
                                            class='bx bx-message-square-dots'></i></span> : 100</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
