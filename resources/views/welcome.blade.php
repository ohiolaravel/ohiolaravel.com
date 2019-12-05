<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Ohio Laravel</title>
    </head>
    <body class="font-sans antialiased bg-cover bg-welcome">
        <div class="relative flex flex-col min-h-screen overflow-hidden lg:flex-row">
            <div class="relative lg:max-h-screen lg:min-h-screen lg:min-w-3xl xl:min-w-3xl lg:flex lg:items-center lg:justify-center lg:w-2/5 lg:py-20 lg:pl-24 bg-ol-gray">
                <div class="lg:pb-16">
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
            <div class="hidden -m-1 overflow-hidden bg-no-repeat lg:-mr-48 lg:w-64 xl:w-96 lg:block" style="background-image:url(/img/wave.svg);">
            </div>
            <div class="flex flex-col justify-center flex-1 p-8 lg:p-0 lg:min-h-screen lg:pr-8">
                <div class="mb-4 text-2xl font-bold text-white">Upcoming Meetings</div>
                @foreach ($meetings as $meeting)
                    <div class="flex flex-row w-full mb-8 bg-white rounded-lg shadow-lg xl:w-4/5">
                        <div class="bg-center bg-cover rounded-l-lg lg:hidden xl:block lg:w-1/3" style="background-image: url({{$meeting->image_url}})">
                        </div>
                        <div class="p-4 text-gray-800 lg:w-full xl:w-2/3">
                            <div class="text-2xl font-bold">{{$meeting->title}}</div>
                            <p class="mt-2 text-sm leading-relaxed min-h-24">
                                {!! $meeting->description !!}
                            </p>
                            <div class="flex items-center mt-4">
                                <div class="flex w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 384 512"><path d="M192 0C85.903 0 0 86.014 0 192c0 71.117 23.991 93.341 151.271 297.424 18.785 30.119 62.694 30.083 81.457 0C360.075 285.234 384 263.103 384 192 384 85.903 297.986 0 192 0zm0 464C64.576 259.686 48 246.788 48 192c0-79.529 64.471-144 144-144s144 64.471 144 144c0 54.553-15.166 65.425-144 272z"/></svg>
                                    <a class="ml-2" href="{{$meeting->location->google_maps_url}}">{{$meeting->location->name}}</a>
                                </div>
                                <div class="flex w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                                    <div class="ml-2 text-sm">{{ $meeting->display_date }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
