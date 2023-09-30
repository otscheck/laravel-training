@extends('layouts.admin-layout') 

@section('body')
<div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4">
    <div class="flex  m-2 p-2">
        <a href="{{route('admin.roles.index')}}" class="px-4 py-2 bg-indigo-400 rounded hover:bg-indigo-600">
        retour roles</a>
    </div>
   <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">
        <form class="space-y-5" method="POST" action="{{route('admin.roles.update', $role)}}" >
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" value="{{$role->name}}"/>
                @error('name')
                    <span class="text-sm text-red-400">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <button type="submit" class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md 
            font-medium text-white uppercase focus:outline-none hover:shadow-none">
            Modifer</button>
        </form>
    </div>
</div>

<div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4">
    <div class="flex  m-2 p-2">
        <h1>Ajout permissions</h1>
        <div class="max-w-md mx-auto">
            @foreach ($role->permissions as $permission)
                <span class="m-2 p-2 bg-indigo-300 rounded-md">{{ $permission->name }}</span>
            @endforeach
        </div>
    </div>
   <div class="max-w-md mx-auto bg-gray-100 p-6 mt-12 rounded">
        <form class="space-y-5" method="POST" action="{{route('admin.roles.permissions', $role)}}" >
            @csrf
            <div>
                <label for="" class="block text-left" style="max-width:  300px">
                    <span class="text-gray-700">Les permissions</span>
                    <select name="permissions[]" id="" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" multiple>
                        @foreach ($permissions as $permission)
                            <option value="{{$permission->id}}" @selected($role->hasPermission($permission->name))>{{$permission->name}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <button type="submit" class="w-full py-3 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md 
            font-medium text-white uppercase focus:outline-none hover:shadow-none">
            Ajouter permissions</button>
        </form>
    </div>
</div>
@endsection

