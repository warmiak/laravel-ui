@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white p-12">
            Hello
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection
