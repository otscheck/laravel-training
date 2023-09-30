
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Postes') }}
        </h2>
        
        @can('create', App\Models\Post::class)            
        <div class="flex justify-end m-2 p-2">
            <a href="{{route(('posts.create'))}}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">
                nouveau poste</a>
            </div>
        @endcan
        </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="mt-12 max-w-6xl mx-auto"> --}}
               
                <div class="relative overflow-x-auto bg-gray-200 shadow-md sm:rounded-lg">
                    <table class="w-full text-left text-sm text-gray-500 font-light">
                        <thead class="border-b font-medium">
                        <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">Titre</th>
                            <th scope="col" class="px-6 py-4">Contenu</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post )                
                            <tr class="border-b bg-white">
                                <th class="px-6 py-4 font-medium text-gray-900">{{ $post->id}}</th>
                                <th class="px-6 py-4 font-medium text-gray-900">{{ $post->title}}</th>
                                <th class="px-6 py-4 font-medium text-gray-900">{{ $post->body}}</th>     
                                <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex space-x-2">                
                                    <a href="{{route('posts.edit', $post)}}">Edit</a>
                                    <form action="{{ route('posts.destroy', $post)}}" method="POST" onsubmit="return confirm('etes vous en sûr ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                                    </form>
                                </div>
                                </td>          
                            </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>