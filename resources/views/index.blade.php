@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white-text text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a Developer?</h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read More..</a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/11/23/14/45/coding-1853305_960_720.jpg" width="700" alt="">
    </div>
<div class="m-auto sm:m-auto text-left w-4/5 block">
    <h2 class="text-4xl font-extrabold text-gray-600">
        Struggling to be a better web developer?
    </h2>
    <p class="py-8 text-gray-800 text-s">

        Lorem ipsum dolor sit amet consectetur adipisicing.
    </p>

    <p class="font-extrabold text-gray-600 text-l pb-9">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum tenetur corrupti pariatur culpa natus reiciendis exercitationem, aut est beatae magni quod nulla aspernatur voluptas libero a modi, tempora optio expedita.
    </p>
<a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find out more</a>
</div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>
    <span class="font-extrabold block text-3xl py-1">Ux Design</span>
    <span class="font-extrabold block text-3xl py-1">Project Management</span>
    <span class="font-extrabold block text-3xl py-1">Digital Strategy</span>
    <span class="font-extrabold block text-3xl py-1">Backend Development</span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas natus dolorum, sint aperiam autem cumque quaerat a incidunt obcaecati ea amet maxime? Et ipsa doloremque quibusdam sint ullam ducimus!</p>

</div>
@endsection
