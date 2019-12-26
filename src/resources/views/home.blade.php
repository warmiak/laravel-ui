@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white p-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p>{{ ucfirst(auth()->user()->name) }}'s Profile</p>
        </div>
    </div>
@endsection
