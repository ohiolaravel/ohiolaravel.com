@extends('layouts.public')

@section('content')
<div class="flex flex-col items-center justify-center flex-1 h-screen">
    <div class="flex w-full mx-2 bg-white rounded-lg shadow-lg sm:w-3/4 lg:w-1/4 sm:mx-0">
        <div class="flex flex-col w-full p-4">
            <div class="flex flex-col justify-center flex-1">
                <div class="w-full">
                    <form class="w-3/4 mx-auto form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="flex flex-col">
                            <input id="email" type="text"
                                class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-blue-800' : 'border-grey-400' }}"
                                name="email" value="{{ old('email') }}" placeholder="Email">
                            {!! $errors->first('email', '<span class="mt-2 text-xs text-blue-800">:message</span>') !!}
                        </div>
                        <div class="flex flex-col mt-4">
                            <input id="password" type="password"
                                class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-blue-800' : 'border-grey-400' }}"
                                name="password" required placeholder="Password">
                            {!! $errors->first('password', '<span class="mt-2 text-xs text-blue-800">:message</span>')
                            !!}
                        </div>
                        <div class="flex mt-4">
                            <input type="checkbox" name="remember" class="mr-2" {{ old('remember') ? 'checked' : '' }}>
                            <div class="text-sm text-grey-800"> {{ __('Remember Me') }}</div>
                        </div>
                        <div class="flex flex-col mt-8">
                            <button type="submit" class="px-4 py-2 text-sm font-semibold text-white rounded bg-ol-red">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
