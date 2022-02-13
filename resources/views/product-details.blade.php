@extends('layouts.app')

@section('page_title')
Product Details
@endsection

@section('main_content')

    @include('components.banner')

    @include('components.single-comic-details') 
@endsection