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