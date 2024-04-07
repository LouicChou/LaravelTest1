@extends('layouts.master') {{-- 主樣板 --}}

@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">User</h1>
        User

        <div class="row mt-5">
            @foreach ($blogs as $blog)
                @if ($blog['status'] == 1)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                                <div class="btn-sm btn-warning">Pending</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
    </main>
@endsection
