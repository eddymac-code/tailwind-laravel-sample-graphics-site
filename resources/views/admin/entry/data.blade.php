@extends('layouts.admin')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 mb-3 rounded-lg">
            <a type="button" class="bg-blue-500 text-black p-3 mb-3 rounded" 
            href="{{ route('add-entries') }}">Add Entry</a>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <table class="table-auto dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data)
                        @foreach ($data as $i => $entry)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $entry->title }}</td>
                                <td><img src="{{ asset('storage/images/entries/'.$entry->image) }}" style="height:100px" ></td>
                                <td>{{ $entry->date }}</td>
                                <td>
                                    <a type="button" href="{{ route('edit-entries', $entry->id) }}" 
                                    class="bg-blue-500 text-black p-3 rounded">Edit</a>
                                    <form action="{{ route('delete-entries', $entry->id) }}" method="post" class="deleteform">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-500 py-3 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <p><strong>No data available</strong></p>
                            </td>
                        </tr>
                    @endif

            
                        
                </tbody>
            </table>
        </div>
    </div>
@endsection