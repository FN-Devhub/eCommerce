@extends('layout.master')

@section('title' , 'Contact Me')

@section('content')
    <div class="container">
        <h1>{{ $page_name }}</h1>
        <p>{{ $page_description }}</p>
    </div>
@endsection

@section('sidebar')
@parent
This Is Sidebar From Contact Me Page
@endsection