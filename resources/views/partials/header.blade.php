<header>
    <div class="top">
        <div class="container">
            dc power visa
        </div>
    </div>

    {{-- Nav Menu  --}}
    <nav>
        <div class="container">
            <div class="flex">

                {{-- Logo  --}}
                <div class="logo">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Dc logo">
                </div>

                {{-- Links  --}}
                <ul>
                    @foreach ($links as $link)
                        <li>
                            <a class="link" href="#">{{ $link }}</a>
                        </li> 
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>
</header>