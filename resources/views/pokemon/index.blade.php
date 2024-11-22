@extends('layouts.base')
@section('title', 'Pokemon - List all')

@section('content')
<div class="grid grid-cols-3 gap-10 mt-12 mx-12">

    @foreach($pokemon as $entity)
    <div class="relative flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="absolute top-4 right-5">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-300"> {{ $entity->id }} </p>
        </div>
        <img class="object-cover rounded-t-lg w-1/3 h-32 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('assets/images/pokemon_create.jpg') }}" alt="{{ $entity->name }}">

        <div class="flex flex-col justify-between p-4 leading-normal w-2/3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $entity->name }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">{{ $entity->power }} PP</p>

            <div class="text-right">
                <span class="inline-flex mt-2 -space-x-px overflow-hidden rounded-md border border-gray-900 shadow-sm">
                    <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="inline-block px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-600 hover:text-white focus:relative dark:bg-gray-900">Edit</a>

                    <form action="{{ url('pokemon/'.$entity->id) }}" method="POST" class="inline-block text-sm font-medium text-red-500 hover:bg-red-500 hover:text-white focus:relative dark:bg-gray-900">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2" type="submit">Delete</button>
                    </form>
                </span>
            </div>
        </div>
    </div>
    @endforeach

</div>

</div>


<!-- <div>

    <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div> -->

@endsection
