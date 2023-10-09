@props(['titre'])

<header>
    <div class="image-container">
        {{-- Image du header --}}
        <img src="{{ asset('images/header.png') }}" alt="Image header">
        <h1>
            {{ $titre }}
        </h1>
    </div>
</header>
