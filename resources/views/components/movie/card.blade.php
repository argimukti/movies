<div class="bg-gray-800 p-4 rounded-lg relative group">
    <a href="{{ route('movie.show', $index) }}">
        <img src="{{ $getImage }}" alt="{{ $title}}" srcset="" class="w-full rounded-md">
        <h3 class="text-lg mt-2"> {{ $title}}</h3>
        <p class="text-sm text-gray-400"> {{ $releasedate }}</p>

        <div class="absolute top-2 right-2 space-x-2 opacity-0 group-hover:opacity-100 transition">
            <a href="{{ route('movie.edit', $index) }}" class="bg-green-600 p-1 rounded hover:bg-green-500">
                ✏️
            </a>
            <form id="delete-form-{{ $index }}" action="{{ route('movie.destroy', $index) }}" style="display: none" method="POST">
                @csrf
                @method('DELETE')
            </form>
            <a href="{{ route('movie.destroy', $index) }}" onclick="event.preventDefault(); confirm('Are You Sure?'); document.getElementById('delete-form-{{ $index }}').submit();" class=" bg-red-600 p-1 rounded hover:bg-red-500">
                ❌
            </a>

        </div>
    </a>
</div>
