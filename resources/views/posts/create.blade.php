<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Administrateur</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">    
            <div class="flex-1 flex flex-col overflow-hidden">
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">                
                        {{-- {{ $slot }} --}}
                        <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4">
                            <div class="flex  m-2 p-2">
                                <a href="{{route('admin.roles.index')}}" class="px-4 py-2 bg-indigo-400 rounded hover:bg-indigo-600">
                                retour postes</a>
                            </div>
                            <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">
                                <form class="space-y-5" method="POST" action="{{route('posts.store')}}" >
                                    @csrf
                                    <div>
                                        <label for="title">Titre</label>
                                        <input type="text" id="title" name="title" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                                        focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                                        @error('title')
                                            <span class="text-sm text-red-400">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="body">Contenu</label>
                                        <input type="text" id="body" name="body" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                                        focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                                        @error('body')
                                            <span class="text-sm text-red-400">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md 
                                    font-medium text-white uppercase focus:outline-none hover:shadow-none">
                                    Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>




