<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pokemon - List all</title>
</head>
<body class="px-5 py-5 dark:bg-gray-900">
    <div class="flex justify-center items-center">
        <img src="{{ asset('assets/images/pokeball.svg') }}" alt="pokebola">
        <a href="{{ url('pokemons/create') }}" class="mx-4 flex items-center justify-center rounded border border-red-500 px-12 py-3 text-sm font-medium text-red-500 hover:bg-red-600 hover:text-white focus:outline-none active:bg-red-500 dark:bg-gray-1000">Create</a>
    </div>

    <div class="grid grid-cols-4 gap-4 mt-12 mx-12">
        @foreach($pokemons as $pokemon)
            <div class="inline-block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex">
                    <h3 class="mb-2 w-2/4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pokemon->name }}</h3>
                    <h4 class="w-2/4 text-right text-gray-800 dark:text-gray-300">{{ $pokemon->power_points }} PP</h4>
                </div>    
                <p class="font-normal text-gray-700 dark:text-gray-500">{{ $pokemon->type }}</p>

                <span class="inline-flex mt-2 -space-x-px overflow-hidden rounded-md border border-gray-900 shadow-sm">
                    <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}" class="inline-block px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-600 hover:text-white focus:relative dark:bg-gray-900" >Edit</a>
                    
                    <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="inline-block px-4 py-2 text-sm font-medium text-red-500 hover:bg-red-500 hover:text-white focus:relative dark:bg-gray-900">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </span>
    
            </div>
        @endforeach
    </div>
</body>
</html>

