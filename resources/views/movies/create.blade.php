@extends('app')
@section('content')

    {{-- @if($errors->any())
        <div class="bg-red-500 text-white py-2 px-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6">Add Movie</h2>

        <form action="{{ route('movie.store') }}" class="space-y-6" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('title') border-red-500 @enderror"> @error('title')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>

            @enderror
        </div>
        <div>
            <label for="description" class="block text-lg mb-2" >Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <label for="release_date" class="block text-lg mb-2">Release Date</label>
            <input type="date" id="" name="release_date" value="{{ old('release_date') }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('release_date') border-red-500 @enderror">
            @error('release_date')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <label for="cast" class="block text-lg mb-2">Cast</label>
            <input type="text" id="cast" name="cast" value="{{ old('cast') }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('cast') border-red-500 @enderror">
            @error('cast')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <div>
                <label for="genres" class="block text-lg mb-2">Genres</label>
                <input type="text" id="genres" name="genres" value="{{ old('genres') }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('genres') border-red-500 @enderror">
                @error('genres')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
            @enderror
            </div>
            <div>
                <label for="image" class="block text-lg mb-2">Poster</label>
                <input type="text" id="image" name="image" value="{{ old('image') }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('image') border-red-500 @enderror">
                @error('image')
                <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
            @enderror
            </div>
            <button type="submit" class="bg-blue-600 px-6 py-2 rounded hover:bg-blue-500">Save</button>
        </div>
    </form>
</div>

@endsection
