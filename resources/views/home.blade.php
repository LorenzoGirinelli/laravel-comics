@extends('layouts.app')

@section('page_title')
menu
@endsection

@section('main_content')

    @include('components.banner')

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
    <div class="pre-footer"></div>
    
@endsection