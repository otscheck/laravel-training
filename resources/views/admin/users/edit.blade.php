@extends('layouts.admin-layout') 

@section('body')
<div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4">
    <div class="flex  m-2 p-2">
        <a href="{{route('admin.users.index')}}" class="px-4 py-2 bg-indigo-400 rounded hover:bg-indigo-600">
        retour permission</a>
    </div>
   <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">

        <form action="{{route('admin.permissions.update', $user)}}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input type="text" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" id="name" name="name" value="{{$user->name}}"/>
                @error('name')
                    <span class="text-sm text-red-400">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" id="name" name="name" value="{{$user->email}}"/>
                @error('email')
                    <span class="text-sm text-red-400">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" id="name" name="name" value="{{$user->name}}"/>
                @error('name')
                    <span class="text-sm text-red-400">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <button type="submit" class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md font-medium text-white uppercase focus:outline-none hover:shadow-none">Modifier</button>

        </form>
    </div>
</div>

@endsection
