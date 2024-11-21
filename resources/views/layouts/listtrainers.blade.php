@vite('resources/css/app.css')

<div class="grid grid-cols-4 gap-4 mt-12 mx-12">
    @foreach($trainers as $trainer)
    <div class="relative flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="absolute top-4 right-5">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-300"> {{ $trainer->id }} </p>
        </div>
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/' . $trainer->image) }}" alt="foto do treinador">
        <div class="flex flex-col h-full justify-around p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $trainer->name }}</h5>

            <span class="inline-flex mt-2 -space-x-px overflow-hidden rounded-md border border-gray-900 shadow-sm">
                <a href="{{ url('trainers/'.$trainer->id.'/edit') }}" class="inline-block px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-600 hover:text-white focus:relative dark:bg-gray-900">Edit</a>

                <form action="{{ url('trainers/'.$trainer->id) }}" method="POST" class="inline-block text-sm font-medium text-red-500 hover:bg-red-500 hover:text-white focus:relative dark:bg-gray-900">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2" type="submit">Delete</button>
                </form>
            </span>
        </div>
    </div>
    @endforeach
</div>