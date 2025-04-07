<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    {{-- Profile:
    <ul>
        <li> Name : {{ $user['name']}}</li>
        <li> Email : {{ $user['email'] }}</li>
        @if($user['role'] == 'admin')
        <li> Role : Administrator</li>
        @elseif($user['role'] == 'user')
        <li> Role : User</li>
        @else
        <li> Role : Guest</li>
        @endif
    </ul> --}}

    {{-- @switch($movieCategory)
        @case('action')
            <h4>Action Movies</h4>
            @break

            @case('comedy')
            <h4>Comedy Movies</h4>
            @break
            @case('drama')
            <h4>Drama Movies</h4>
            @break
            @case('horror')
            <h4>Horror Movies</h4>
            @break
        @default
        <h4>Other Movies</h4>
    @endswitch --}}
    <ul>
    {{-- @for($i = 0; $i < count($movies); $i++)
        <li>{{ $movies[$i]['title'] }} - {{ $movies[$i]['year'] }}</li>
    @endfor --}}
    {{-- @foreach($movies as $movie)
        @if($movie['year']<2025)
            @continue
        @endif
        @if($movie['year']>2028)
        @break
        @endif
        <li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
    @endforeach --}}

    {{-- @forelse ($movies as $movie )
    <li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
    @empty
    <li>No movies found</li>

    @endforelse --}}
    </ul>
    @foreach ($movies as $movie)
    {{-- <p class="{{ $movie['year']<2025 ? 'text-red-400' : 'text-green-400' }}">
        {{ $movie['title'] }} - {{ $movie['year'] }}
    </p> --}}
    {{-- <p class="{{ $loop->first ? 'font-bold' : ($loop->last ? 'text-2xl' : '') }}">
        {{ $movie['title'] }} - {{ $movie['year'] }} --}}
        @include('partials._movie', ['movie' => $movie])
    @endforeach
</body>
</html>
