@extends('layouts.admin')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h3>Add an entry</h3>
            <div class="flex">
                <a type="button" href="{{ route('entries') }}" class="bg-blue-500 text-white p-3 mb-3 rounded">
                    Go Back
                </a>
            </div>
            {!! Form::open(['route' => 'insert-entries', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="mb-4">
                    {{ Form::label('title', 'Title', ['class' => 'sr-only']) }}
                    {{ Form::text('title', "", ['class' => 'bg-gray-100 border-2 w-full p-4 rounded-lg', 
                    'placeholder' => 'Insert Title']) }}

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    {{ Form::label('description', 'Description', ['class' => 'sr-only']) }}
                    {{ Form::textarea('description', "", ['class' => 'bg-gray-100 border-2 w-full p-4 rounded-lg', 
                    'placeholder' => 'Insert Description', 'cols' => '30', 'rows' => '4']) }}

                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    {{ Form::label('image', 'Image', ['class' => 'sr-only']) }}
                    {{ Form::file('image') }}

                    @error('image')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    {{ Form::label('date', 'Date', ['class' => 'sr-only']) }}
                    {{ Form::date('date', "", ['class' => 'bg-gray-100 border-2 w-full p-4 rounded-lg', 
                    'placeholder' => 'Insert Date']) }}

                    @error('date')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                    font-medium w-full">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection