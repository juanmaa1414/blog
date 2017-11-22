@extends('layouts.app')

@section('title', 'Categories List')

@section('content')
    <div class="w-4/5 ml-auto mr-auto">
        <h3 class="title">Categories List</h3>
    </div>

    <div class="flex flex-wrap posts-list">
        <div class="md:w-4/5 ml-auto mr-auto">
            @foreach($categories as $category)
                <a href="{{ $category->url }}" class=" no-underline p-8 bg-{{ app('theme')->getMainColor() }} m-4 md:w-auto rounded-lg inline-flex">
                    <span class="m-auto text-grey-darker text-lg">{{ $category->name }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection