@extends('layouts.base')
@section('title', 'Ypur trainers')
@section('title_nav')
<a href="{{ url('/') }}" class="flex items-center hover:opacity-65 transition-all">
    <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496.182 496.182"><path style="fill: rgb(148, 61, 70);" d="M 419.796 331.145 L 344.365 351.575 C 344.365 351.575 367.937 353.433 395.282 364.577 C 395.282 364.577 439.595 382.223 495.226 369.22 C 495.226 369.22 464.111 340.432 419.796 331.145 Z"></path><path style="fill: rgb(237, 85, 100);" d="M 398.953 300.594 C 398.953 300.594 335.852 265.209 189.919 329.62 C 168.524 337.022 55.707 373.163 2.069 332.074 C 2.069 332.074 -25.067 92.209 188.588 92.495 L 188.588 92.477 C 188.83 92.477 189.063 92.487 189.303 92.487 C 189.758 92.491 190.19 92.472 190.646 92.477 L 190.646 92.51 C 361.646 93.658 393.372 235.846 398.953 300.594 Z"></path><g transform="matrix(1.276109, 0, 0, 1.256868, -87.167412, -43.245331)"><path style="fill: rgb(255, 255, 255);" d="M208.295,113.202l-3.802-4.525c-32.675,27.434-51.199,70.552-53.574,124.694 c-1.782,40.684,6.221,73.747,6.304,74.077l5.737-1.413C162.647,304.753,132.263,177.041,208.295,113.202z"></path><path style="fill: rgb(255, 255, 255);" d="M 287.666 135.08 C 259.027 112.864 231.759 107.281 230.612 107.055 L 207.196 113.795 C 207.467 113.849 180.158 125.749 181.279 141.802 C 182.263 155.901 139.266 158.614 160.911 306.026 L 350.968 266.104 C 346.701 196.297 314.075 155.567 287.666 135.08 Z"></path></g><path style="fill: rgb(207, 56, 71);" d="M 304.762 293.069 C 257.619 301.427 75.639 351.575 75.639 351.575 C 75.639 351.575 122.783 425.867 213.302 426.798 C 213.302 426.798 245.36 431.442 300.047 384.082 C 300.047 384.082 409.266 307.387 482.896 359.315 L 399.05 295.855 C 399.05 295.854 351.905 284.711 304.762 293.069 Z M 482.896 359.314 L 488.624 363.649 C 486.745 362.104 484.829 360.675 482.896 359.314 Z"></path><path style="fill: rgb(216, 75, 89);" d="M 188.787 69.259 C 175.767 69.259 165.214 79.445 165.214 92.012 C 165.214 104.577 212.357 104.577 212.357 92.012 C 212.359 79.445 201.804 69.259 188.787 69.259 Z"></path><g transform="matrix(0.95515, 0, 0, 1, 6.794006, 0)"><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(93, 195, 223);" cx="227.453" cy="213.319" rx="58.011" ry="56.236"></ellipse><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="228.378" cy="211.297" rx="22.76" ry="22.508"></ellipse><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(93, 195, 223);" cx="228.024" cy="211.225" rx="14.79" ry="14.665"></ellipse><rect x="244.597" y="202.623" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);"></rect><rect x="151.482" y="202.876" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);"></rect></g></svg>
    <span class="font-semibold text-xl tracking-tight ml-5">Trainers</span>
</a>
@endsection

@section('content')

@can('create', App\Models\Coach::class)
<div class="w-16 h-16 absolute bottom-10 right-10">
    <a
        class="inline-block rounded-full bg-red-600 px-3 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none active:bg-red-500"
        href="{{url('coaches/create')}}"
        title="Create new trainer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor">
            <path d="M12 5c.55 0 1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1z" />
        </svg>
    </a>
</div>
@endcan

@can('index', App\Models\Coach::class)
<div class="w-full grid grid-cols-3 auto-rows-[200px] gap-10 mt-12 mx-12">

    @foreach($coaches as $entity)
    <div class="h-48 relative flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100">
        <div class="absolute top-4 right-5">
            <p class="mb-3 font-normal text-gray-700"> {{ $entity->id }} </p>
        </div>
        <img class="object-cover rounded-t-lg w-1/3 h-32 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($entity->image) }}" alt="{{ $entity->name }}">

        <div class="flex flex-col justify-between p-4 leading-normal w-2/3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $entity->name }}</h5>

            <div class="absolute bottom-4 right-5">
                <span class="inline-flex mt-2 -space-x-px overflow-hidden rounded-md border border-gray-900 shadow-sm">
                    <a href="{{ url('coaches/'.$entity->id.'/edit') }}" class="transition-all inline-block px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-600 hover:text-white focus:relative">Edit</a>

                    <form action="{{ url('coaches/' . $entity->id) }}" method="POST" class="transition-all inline-block text-sm font-medium text-red-500 hover:bg-red-500 hover:text-white focus:relative">
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
@else
<h1 class="w-full p-10 text-2xl font-bold text-center">You need to be logged to view the trainers.</h1>
@endcan

@endsection
