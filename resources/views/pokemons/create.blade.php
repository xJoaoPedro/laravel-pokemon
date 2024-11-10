<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pokemon - Create</title>
</head>
<body>

  <section class="bg-white dark:bg-gray-900">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
        <img
          alt=""
          src="{{ asset('assets/images/squirtle.jpg') }}"
          class="absolute inset-0 h-full w-full object-cover"
        />
      </aside>

      <main
        class="flex flex-col items-center justify-center space-y-12 px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
        >
        <div class="flex justify-left w-full">
          <a
            class="group relative inline-flex items-center overflow-hidden rounded border border-red-500 px-8 py-3 text-red-500 hover:bg-red-600 hover:text-white focus:outline-none active:text-red-600"
            href="{{ url('pokemons') }}"
          >
            <span class="absolute -start-full transition-all group-hover:start-4">
              <svg
                class="size-5 rtl:rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 16l-4-4m0 0l4-4m-4 4h14"
                />
              </svg>
            </span>

            <span class="text-sm font-medium transition-all group-hover:ms-4"> Back </span>
          </a>
        </div>

        <div class="max-w-xl lg:max-w-3xl">
          <a class="block text-blue-600" href="#">
            <img src="{{ asset('assets/images/pokeball.svg') }}" alt="pokebola">
          </a>

          <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl dark:text-white">
            Create and store your Pokemon! 👹
          </h1>

          <p class="mt-4 leading-relaxed text-gray-500">
          Create your Pokémon, choose its type and Power Points, and get ready for adventures and battles!
          </p>


          <form action="{{ url('pokemons') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
            @csrf
            <div class="col-span-6 sm:col-span-3">
              <label for="Name" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Name </label>
              <input 
                type="text" id="Name" name="name" required class="mt-1 w-full px-3 py-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 shadow-sm dark:bg-gray-900 dark:text-gray-300"
              />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Type </label>
              <input
                type="text" name="type" id="type" required class="mt-1 w-full px-3 py-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 shadow-sm dark:bg-gray-900 dark:text-gray-300"
              />
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="power_points" class="block text-sm font-medium text-gray-700 dark:text-gray-300"> Power Points </label>
              <input 
                type="number" id="powerPoints"  name="power_points" placeholder="0" min="-0" max="10000" required class="mt-1 w-full px-3 py-2 rounded-md border border-gray-300 bg-white text-sm text-gray-700 shadow-sm dark:bg-gray-900 dark:text-gray-300"
              />
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              class="inline-block shrink-0 rounded-md border border-red-500 px-12 py-3 text-sm font-medium text-red-500 transition hover:bg-transparent hover:text-white focus:outline-none active:text-red-600 dark:hover:bg-red-700 dark:hover:text-white"
            >
                Create Pokemon
              </button>
            </div>
          </form>

        </div>
      </main>
    </div>
  </section>
</body>
</html>