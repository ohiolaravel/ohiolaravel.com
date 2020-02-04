@extends('layouts.app')

@section('content')
<div class="container max-w-5xl mx-auto bg-red">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($meetings as $meeting)
                @include('partials.meeting-card', ['meeting' => $meeting, 'image' => false])
                <br><br>
            @endforeach
            {{ $meetings->links() }}
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
