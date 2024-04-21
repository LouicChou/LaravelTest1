@extends('layouts.master') {{-- 主樣板 --}}

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->descrition }}</p>
                            <ul>
                                @foreach ($post->tags as $tag)
                                    <li>{{ $tag->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
