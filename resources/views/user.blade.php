@extends('layouts.master') {{-- 主樣板 --}}

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            @foreach ($addresses as $address)
                {{-- <div class="col-md-3">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>{{ $user->name }}</h4>
                            <p>{{ $user->email }}</p>
                            <p>{{ $user->address }}</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-3">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>{{ $address->user->name }}</h4>
                            <p>{{ $address->user->email }}</p>
                            <p>{{ $address->address }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
