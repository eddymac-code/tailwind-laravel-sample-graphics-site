@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg grid grid-cols-3 gap-3">
                @foreach ($data as $entry)
                    <div class="infoDiv">
                        <div class="flex items-center justify-centre imageDiv">
                            <img src="{{ asset('storage/images/entries/'.$entry->image) }}" alt="">
                        </div>
                        <div class="flex items-center justify-centre bg-blue-500 descDiv">
                            <a href="" class="ml-3 font-bold">{{ $entry->user->name }}</a> <span
                            class="ml-3 text-gray-600 text-sm">{{ $entry->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection