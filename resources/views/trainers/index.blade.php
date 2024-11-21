<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Trainer - List all</title>
</head>
<body class="px-5 py-5 dark:bg-gray-900">
    
    @extends('layouts.listtrainers')

    @extends('layouts.header')
    @section('object', 'Trainer')
    @section('path', 'trainers')
    @section('secondPath', 'pokemons')

</body>
</html>