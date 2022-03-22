@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Gallery page
                @foreach ($data as $entry)
                    <div class="grid grid-columns-3">
                        <div class="imageDiv">
                            <img src="{{ asset('storage/images/entries/'.$entry->image) }}" alt="">
                        </div>
                        <div class="descDiv">
                            <a href="" class="font-bold">{{ $entry->user->name }}</a> <span
                            class="text-gray-600 text-sm">{{ $entry->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
        </div>
    </div>
@endsection