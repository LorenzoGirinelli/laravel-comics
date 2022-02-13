<section class="single-comic-details">

    {{-- Image  --}}
    <div class="comic-image">
        <div class="container-single-card">
            <div class="image-container">
                <div class="comic-img">
                    <img src="{{ $comic_info['thumb'] }}" alt="{{$comic_info['title']}}">
                </div>
            </div>
        </div>
    </div>

    {{-- Description  --}}
    <div class="description">
        <div class="container-single-card">
            <div class="flex">

                {{-- Text  --}}
                <div class="text">

                    {{-- Title  --}}
                    <h1 class="comic-title">{{ $comic_info['title'] }}</h1>

                    {{-- Stock info --}}
                    <div class="stock-info">
                        <div class="price-box">
                            U.S. Price:
                            <span class="price">{{$comic_info['price']}}</span>
                            <span class="availability">available</span>
                        </div>

                        <div class="check-options">
                            Check Availability
                        </div>
                    </div>

                    {{-- Desc  --}}
                    <div class="desc">
                        {{ $comic_info['description'] }}
                    </div>

                </div>

                {{-- Ads  --}}
                <div class="ads">

                    <h3>advertisement</h3>

                    <div class="ad">
                        <img src="../images/adv.jpg" alt="ads">
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Info  --}}
    <div class="comic-info">
        <div class="container-single-card">
            <div class="flex">

                {{-- Talent  --}}
                <div class="talent info-col">

                    <h3>Talent</h3>

                    {{-- Artists  --}}
                    <div class="row">
                        <div class="tertiary">Art by:</div>

                        <div class="primary">
                            @foreach ($comic_info['artists'] as $artist)
                                {{ $artist }},
                            @endforeach
                        </div>
                    </div>

                    {{-- Writers  --}}
                    <div class="row">
                        <div class="tertiary">Written by:</div>

                        <div class="primary">
                            @foreach ($comic_info['writers'] as $writer)
                                {{ $writer }},
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- Specs  --}}
                <div class="specs">

                    <h3>Specs</h3>

                    <div class="row">
                        <div class="tertiary">Series:</div>

                        <div class="primary">
                            {{ $comic_info['series'] }}
                        </div>
                    </div>

                    {{-- Price  --}}
                    <div class="row">
                        <div class="tertiary">Price:</div>

                        <div class="primary">
                            {{ $comic_info['price'] }}
                        </div>
                    </div>

                    {{-- On Sale  --}}
                    <div class="row">
                        <div class="tertiary">On sale date:</div>

                        <div class="primary">
                            {{ $comic_info['sale_date'] }}
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section> 