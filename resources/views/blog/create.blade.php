@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 ">
        <h1 class="text-6xl">
            Create Post
        </h1>

    </div>

</div>

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" enctype="multipart/form-data" method="post">
    @csrf
    <input type="text"
    name="title"
    placeholder="Title"
    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none"
    >
    <textarea name="description"  placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

    <div class="bg-grey-lighter">
        <label for="" class="w-44 flex flex-col items-center px-2 py-3 bg-white-rouded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
            <span class="mt-2 text-base leading-normal">Select a file</span>
            <input type="file" name="image" class="hidden">
        </label>
    </div>
    <button type="submit" class=" mt-2 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
Submit
    </button>
    </form>

</div>

@endsection
