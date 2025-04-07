@extends('app')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6">Edit Movie</h2>
    <form action="{{ route('movie.update', $movieId) }}" class="space-y-6" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $movie['title'] }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
            <label for="description" class="block text-lg mb-2" >Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $movie['description'] }}</textarea>
        </div>
        <div>
            <label for="release_date" class="block text-lg mb-2">Release Date</label>
            <input type="date" id="" name="release_date" value="{{ $movie['release_date'] }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
            <label for="cast" class="block text-lg mb-2">Cast</label>
            <input type="text" id="cast" name="cast" value="{{ $movie['cast'] }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>
        <div>
            <div>
                <label for="genres" class="block text-lg mb-2">Genres</label>
                <input type="text" id="genres" name="genres" value="{{ $movie['genres'] }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="image" class="block text-lg mb-2">Poster</label>
                <input type="text" id="image" name="image " value="{{ $movie['image'] }}" class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <button type="submit" class="bg-blue-600 px-6 py-2 rounded hover:bg-blue-500">Save</button>
        </div>
    </form>
</div>

@endsection
