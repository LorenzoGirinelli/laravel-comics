@extends('layouts.app')

@section('page_title')
menu
@endsection

@section('main_content')
    <section class="banner">
        <div class="container">
            <div class="banner-container">
                <a href="#" class="btn btn-regular btn-blue">current series</a>
            </div>
        </div>
    </section>

    {{-- Comics List  --}}
    <div class="comic-list">
        <div class="container">
            <div class="comic-list-container">

                @foreach ($comics as $comic)
                    @include('components.comic-card', $comic)
                @endforeach

                <a href="#" class="btn btn-wide btn-blue">load more</a>

            </div>
        </div>
    </div>
@endsection