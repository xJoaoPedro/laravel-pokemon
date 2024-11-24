@extends('layouts.base')
@section('title', 'Pokemon - List all')
@section('title_nav', 'Pokemon')
@section('content')

@can('create', App\Models\Pokemon::class)
<div class="absolute bottom-10 right-10">
    <a
        class="inline-block rounded-full bg-red-600 px-3 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none active:bg-red-500"
        href="{{url('pokemon/create')}}"
        title="Create new Pokemon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
            <path d="M12 5c.55 0 1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1z" />
        </svg>
    </a>
</div>
@endcan

<div class="w-full grid grid-cols-4 auto-rows-[200px] gap-10 mt-12 mx-12">

    @foreach($pokemon as $entity)
    <div class="h-48 relative flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-md hover:bg-gray-100">
        <div class="absolute top-4 right-5">
            <p class="mb-3 font-normal text-gray-700"> {{ $entity->id }} </p>
        </div>
        <img class="object-cover rounded-t-lg w-1/3 h-32 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($entity->image) }}" alt="{{ $entity->name }}">

        <div class="flex flex-col justify-between p-4 leading-normal w-2/3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $entity->name }}</h5>
            <p class="mb-3 font-normal text-gray-700">{{ $entity->power }} PP</p>
            @if(isset($entity->coach))
                <p class="mb-3 font-normal text-gray-700">{{ $entity->coach->name }}</p>
            @else
                <p class="mb-3 font-normal text-gray-700">No coach</p>
            @endif
            <div class="text-right">
                <span class="inline-flex mt-2 -space-x-px overflow-hidden rounded-md border border-gray-900 shadow-sm">
                    <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="inline-block px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-600 hover:text-white focus:relative">Edit</a>

                    <form action="{{ url('pokemon/' . $entity->id) }}" method="POST" class="inline-block text-sm font-medium text-red-500 hover:bg-red-500 hover:text-white focus:relative">
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

@endsection