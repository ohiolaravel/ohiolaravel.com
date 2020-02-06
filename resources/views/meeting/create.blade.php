@extends('layouts.app')

@push('head')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}
@endpush

@section('content')
    <h1 class="text-2xl">Create Meeting</h1>

    <form class="w-full max-w-xl mt-8 text-ol-gray" method="POST" action="/meetings" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="title">
                    Title
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" id="title" name="title" type="text" placeholder="Open House">
            </div>
        </div>
        <div class="mb-6 md:flex">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="description">
                    Description
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" name="description" id="description" name="description" rows="5"></textarea>
            </div>
        </div>
        <div class="mb-6 md:flex">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="location_id">
                    Location
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="relative inline-block w-64">
                    <select class="block w-full px-4 py-2 pr-8 leading-tight bg-gray-300 border border-transparent rounded appearance-none hover:border-ol-gray focus:outline-none focus:border-ol-gray focus:shadow-outline" id="location_id" name="location_id">
                        <option value="">&mdash;</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="note">
                    Note
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" id="note" name="note" type="text" placeholder="Food Provided?">
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="start_at">
                    Starts At
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" id="start_at" name="start_at" type="text">
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="end_at">
                    Ends At
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" id="end_at" name="end_at" type="text">
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3">
                <label class="block pr-4 mb-1 font-bold md:text-right md:mb-0" for="image">
                    Image
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="w-full px-4 py-2 leading-tight bg-gray-300 border-2 border-gray-300 rounded appearance-none focus:outline-none focus:bg-white focus:border-ol-gray" id="image" name="image" type="file">
            </div>
        </div>
        <div class="mb-6 md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button type="submit" class="px-4 py-2 text-white rounded-lg bg-ol-gray">Add Meeting</button>
            </div>
        </div>
        
    </form>

@endsection