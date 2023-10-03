@props(['titre'])

<header>
    <div class="image-container">
        <img src="{{ asset('images/header.png') }}" alt="">
        <h1>
            {{ $titre }}
        </h1>
    </div>
</header>
