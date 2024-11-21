@vite('resources/css/app.css')

<div class="flex justify-between items-center">

    <div class="flex">
        <img src="{{ asset('assets/images/' . (View::yieldContent('path')) . '.png') }}" alt="pokebola">
        <a href="{{ url((View::yieldContent('path')) . '/create') }}" class="transition-all mx-4 flex items-center justify-center rounded border border-red-500 px-10 py-2 text-sm font-medium text-lg text-red-500 hover:bg-red-600 hover:text-white focus:outline-none active:bg-red-500 dark:bg-gray-1000"> Create {{ View::yieldContent('object') }} </a>
    </div>

    <div>
    <a href="{{ url((View::yieldContent('secondPath'))) }}" class="transition-all mx-4 flex items-center justify-center rounded border border-red-500 px-8 py-3 text-sm font-medium text-red-500 hover:bg-red-600 hover:text-white focus:outline-none active:bg-red-500 dark:bg-gray-1000"> Go to {{ View::yieldContent('secondPath') }} </a>
    </div>

</div>