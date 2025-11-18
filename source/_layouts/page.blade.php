@extends('_layouts.html')

@section('body')
    <article class="mx-auto p-8 prose max-w-4xl">
        <h1>{{ $page->title }}</h1>
        @yield('content')
    </article>
@endsection