<h1>{{ $destination->name }}</h1>

<img src="{{ asset('images/' . $destination->image) }}" alt="{{ $destination->name }}">

<p>{{ $destination->description }}</p>
