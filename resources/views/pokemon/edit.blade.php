@extends('layouts.base')
@section('title', 'Pokemon - Edit')
@section('title_nav', 'Pokemon - Edit')
@section('content')
<div class="flex h-screen w-full">


    <div class="w-1/3">
        <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
            <img
                alt=""
                src="{{ asset('assets/images/pokemon_create.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover" />
        </aside>
    </div>

    <div class="w-2/3 flex justify-center items-center">
        <div>

            <div class="flex justify-left w-full mb-10">
                <a
                    class="group transition-all relative inline-flex items-center overflow-hidden border border-black px-8 py-3 text-black hover:bg-red-200 focus:outline-none active:text-red-600"
                    href="{{ url('pokemon') }}">
                    <span class="absolute -start-full transition-all group-hover:start-4">
                        <svg
                            class="size-5 rtl:rotate-180"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 16l-4-4m0 0l4-4m-4 4h14" />
                        </svg>
                    </span>

                    <span class="text-sm font-medium transition-all group-hover:ms-4"> Back </span>
                </a>
            </div>
            <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                Edit and update your Pokemon 👹
            </h1>

            <p class="mt-4 leading-relaxed text-gray-500">
                Here you can edit and update your Pokemon in case you made something wrong!
            </p>

            <form action="{{ url('pokemon/' . $pokemon->id) }}" method="POST" enctype="multipart/form-data" class="mx-auto mt-10 w-5/6">
                @csrf
                @method('PUT')

                <div class="relative z-0 w-full mb-8 group">
                    <input value="{{ $pokemon->name }}" type="text" name="name" id="name" maxlength="13" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input value="{{ $pokemon->type }}" type="text" name="type" id="type" maxlength="10" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="type" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Type</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input value="{{ $pokemon->power }}" type="number" name="power" id="power" min="0" max="10000" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="power" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Power</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-2 group flex">
                    <img src="{{ asset($pokemon->image) }}" alt="{{ $pokemon->name }}" class="object-cover h-16 pr-2">
                    <div class="relative z-0 w-full mb-2 group">
                        <input type="file" name="image" id="image" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                        <label for="image" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image</label>

                    </div>
                </div>

                <div class="relative z-0 w-full mb-8 group">
                    <select name="coach_id" id="coach_id" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                    @foreach ($coaches as $coach)
                        @if($pokemon->coach->id === $coach->id)
                            <option value="{{ $coach->id }}" selected> {{ $coach->name }} </option>
                        @else
                            <option value="{{ $coach->id }}"> {{ $coach->name }} </option>
                        @endif
                    @endforeach
                    </select>
                    <label for="coach_id" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                <div class="text-right mt-10">
                    <button type="submit" class="group relative inline-block focus:outline-none focus:ring">
                        <span
                            class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-red-200 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

                        <span
                            class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold uppercase tracking-widest text-black group-active:text-opacity-75">
                            Update Pokemon
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
