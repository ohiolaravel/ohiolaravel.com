@extends('layouts.public')
    <div class="flex flex-col min-h-screen overflow-hidden lg:flex-row">
        <div class="bg-right-top bg-no-repeat bg-cover lg:max-h-screen lg:min-h-screen lg:flex lg:items-center lg:justify-center bg-ol-gray lg:bg-transparent bg-wave lg:w-3/5 lg:pr-16 xl:w-1/2">
            <div class="">
                <div class="px-6 pt-16 pb-12 text-center lg:text-left md:max-w-3xl md:mx-auto lg:max-w-full lg:pt-0">
                    <div class="flex justify-center lg:block">
                        @include('partials.logo-white', ['classes' => 'w-48 h-48'])
                    </div>
                    <div class="mt-8 lg:mt-8">
                        <h1 class="mt-2 text-3xl font-semibold leading-tight text-white xl:text-3xl font-display">Welcome Buckeye Artisans!</h1>
                        <p class="mt-3 text-lg text-gray-400 lg:max-w-3xl xl:text-xl">We're a group of Laravel enthusiasts, evangelists, newcomers, and much more who meet monthly to discuss Laravel and related topics.</p>
                    </div>
                    <div class="mt-10">
                        <p class="text-base font-medium text-white xl:text-lg">Join our email list to be notified of our next meeting.</p>
                        <form id="form" action="/newsletter/signup" method="POST" class="relative mt-5 lg:pb-12">
                            <div class="sm:flex sm:justify-center lg:justify-start">
                                @csrf
                                <input type="hidden" id="confirm" name="confirm">
                                <input type="text" id="email" name="email" required="required" placeholder="Enter your email" class="block w-full px-5 py-3 text-lg leading-snug bg-white rounded-lg appearance-none sm:max-w-xs focus:outline-none focus:shadow-outline">
                                <button class="relative block w-full h-12 px-6 py-3 mt-4 font-semibold leading-snug tracking-wide text-white uppercase rounded-lg shadow-md sm:mt-0 sm:h-auto sm:ml-4 sm:w-auto bg-ol-red focus:outline-none focus:shadow-outline">
                                    <span class="">Subscribe</span>
                                    <span class="absolute inset-0 flex items-center justify-center opacity-0 pointer-events-none v-cloak:hidden"
                                        <svg viewBox="0 0 24 24" class="w-8 h-8 spin"><path fill="currentColor" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0-2a7 7 0 110-14 7 7 0 010 14z" class="text-gray-600"></path><path fill="currentColor" d="M12 3a9 9 0 010 18v-2a7 7 0 000-14V3z" class="text-gray-400"></path></svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                        @if(Session::has('signup'))
                            <div class="p-4 bg-white rounded-lg">
                                <div class="text-lg">Thanks for signing up!</div>
                                <p class="text-sm">Please check your email to confirm your subscription.</p>
                            </div>
                        @endif
                        @error('email')
                            <div class="p-4 bg-white rounded-lg">
                                <div class="text-lg">Whoops, there was an issue...</div>
                                <p class="text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                        @error('confirm')
                            <div class="p-4 bg-white rounded-lg">
                                <div class="text-lg">Whoops, there was an issue...</div>
                                <p class="text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center p-8 bg-left-top bg-no-repeat bg-contain lg:p-0 lg:min-h-screen lg:pr-8 lg:w-2/5 xl:w-1/2">
            <div class="w-full 2xl:w-1/2">
                @if( $nextMeeting )
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-full max-w-4xl">
                            <div class="w-full mb-4 text-2xl font-bold text-white">Our Next Meeting</div>
                            @include('partials.meeting-card', ['meeting' => $nextMeeting])
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
