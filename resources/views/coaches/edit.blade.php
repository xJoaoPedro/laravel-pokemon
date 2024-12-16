@extends('layouts.base')
@section('title', 'Trainers - Edit')
@section('title_nav')
<a href="{{ url('/coaches') }}" class="flex items-center hover:opacity-65 transition-all">
    <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496.182 496.182">
        <path style="fill: rgb(148, 61, 70);" d="M 419.796 331.145 L 344.365 351.575 C 344.365 351.575 367.937 353.433 395.282 364.577 C 395.282 364.577 439.595 382.223 495.226 369.22 C 495.226 369.22 464.111 340.432 419.796 331.145 Z"></path>
        <path style="fill: rgb(237, 85, 100);" d="M 398.953 300.594 C 398.953 300.594 335.852 265.209 189.919 329.62 C 168.524 337.022 55.707 373.163 2.069 332.074 C 2.069 332.074 -25.067 92.209 188.588 92.495 L 188.588 92.477 C 188.83 92.477 189.063 92.487 189.303 92.487 C 189.758 92.491 190.19 92.472 190.646 92.477 L 190.646 92.51 C 361.646 93.658 393.372 235.846 398.953 300.594 Z"></path>
        <g transform="matrix(1.276109, 0, 0, 1.256868, -87.167412, -43.245331)">
            <path style="fill: rgb(255, 255, 255);" d="M208.295,113.202l-3.802-4.525c-32.675,27.434-51.199,70.552-53.574,124.694 c-1.782,40.684,6.221,73.747,6.304,74.077l5.737-1.413C162.647,304.753,132.263,177.041,208.295,113.202z"></path>
            <path style="fill: rgb(255, 255, 255);" d="M 287.666 135.08 C 259.027 112.864 231.759 107.281 230.612 107.055 L 207.196 113.795 C 207.467 113.849 180.158 125.749 181.279 141.802 C 182.263 155.901 139.266 158.614 160.911 306.026 L 350.968 266.104 C 346.701 196.297 314.075 155.567 287.666 135.08 Z"></path>
        </g>
        <path style="fill: rgb(207, 56, 71);" d="M 304.762 293.069 C 257.619 301.427 75.639 351.575 75.639 351.575 C 75.639 351.575 122.783 425.867 213.302 426.798 C 213.302 426.798 245.36 431.442 300.047 384.082 C 300.047 384.082 409.266 307.387 482.896 359.315 L 399.05 295.855 C 399.05 295.854 351.905 284.711 304.762 293.069 Z M 482.896 359.314 L 488.624 363.649 C 486.745 362.104 484.829 360.675 482.896 359.314 Z"></path>
        <path style="fill: rgb(216, 75, 89);" d="M 188.787 69.259 C 175.767 69.259 165.214 79.445 165.214 92.012 C 165.214 104.577 212.357 104.577 212.357 92.012 C 212.359 79.445 201.804 69.259 188.787 69.259 Z"></path>
        <g transform="matrix(0.95515, 0, 0, 1, 6.794006, 0)">
            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(93, 195, 223);" cx="227.453" cy="213.319" rx="58.011" ry="56.236"></ellipse>
            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="228.378" cy="211.297" rx="22.76" ry="22.508"></ellipse>
            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(93, 195, 223);" cx="228.024" cy="211.225" rx="14.79" ry="14.665"></ellipse>
            <rect x="244.597" y="202.623" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);"></rect>
            <rect x="151.482" y="202.876" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);"></rect>
        </g>
    </svg>
    <span class="font-semibold text-xl tracking-tight ml-5">Edit trainer</span>
</a>
@endsection

@section('content')
<div class="flex h-full w-full">


    <div class="w-1/3">
        <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
            <img
                alt=""
                src="{{ asset('assets/images/confused-trainer.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover" />
        </aside>
    </div>

    <div class="w-2/3 flex justify-center items-center">
        <div>

            <div class="flex justify-left w-full mb-10">
                <a
                    class="group transition-all relative inline-flex items-center overflow-hidden border border-red-600 px-8 py-3 text-black hover:bg-red-600 focus:outline-none active:text-red-600"
                    href="{{ url('coaches') }}">
                    <span class="absolute -start-full transition-all group-hover:start-4">
                        <svg
                            class="size-5 rtl:rotate-180 group-hover:text-white"
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

                    <span class="text-sm trxt-black font-medium transition-all group-hover:ms-4 group-hover:text-white"> Back </span>
                </a>
            </div>
            <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                Edit and update your trainer 🧑
            </h1>

            <p class="mt-4 leading-relaxed text-gray-500">
                Oops! Here you can edit and update your trainer in case you made something wrong.
            </p>

            <form action="{{ url('coaches/' . $coach->id) }}" method="POST" enctype="multipart/form-data" class="mx-auto mt-10 w-5/6">
                @csrf
                @method('PUT')

                <div class="relative z-0 w-full mb-8 group">
                    <input value="{{ $coach->name }}" type="text" name="name" id="name" maxlength="13" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                <div class="relative z-0 w-full h-32 mb-2 group flex">
                    <img src="{{ asset($coach->image) }}" alt="{{ $coach->name }}" class="object-cover h-16 pr-2">
                    <div class="relative z-0 w-full h-48 mb-8 group">
                        <input type="file" name="image" id="image" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                        <label for="image" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Photo</label>

                    </div>
                </div>
                <div class="text-right">
                    <button class="group relative inline-block overflow-hidden border border-red-600 px-8 py-3 focus:outline-none" type="submit">
                        <span
                            class="absolute inset-x-0 bottom-0 h-[2px] bg-red-600 transition-all group-hover:h-full group-active:bg-red-500"></span>

                        <span
                            class="relative text-sm font-medium text-black transition-colors group-hover:text-white">
                            Update trainer
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
