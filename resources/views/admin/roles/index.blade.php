@extends('layouts.admin-layout') 

@section('body')
<div class="mt-12 max-w-6xl mx-auto">
    <div class="flex justify-end m-2 p-2">
        <a href="{{route(('admin.roles.create'))}}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">
        nouveau role</a>
    </div>
    <div class="relative overflow-x-auto bg-gray-200 shadow-md sm:rounded-lg">
      <table class="w-full text-left text-sm text-gray-500 font-light">
        <thead class="border-b font-medium">
          <tr>
            <th scope="col" class="px-6 py-4">ID</th>
            <th scope="col" class="px-6 py-4">Name</th>
            <th scope="col" class="px-6 py-4">Permissions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roles  as $role )                
            <tr class="border-b bg-white">
                <th class="px-6 py-4 font-medium text-gray-900">{{ $role->id}}</th>
                <th class="px-6 py-4 font-medium text-gray-900">{{ $role->name}}</th>
                <th class="px-6 py-4 font-medium text-gray-900">
                  @forelse ($role->permissions as $rp)
                   <span class="m-1 p-1 bg-indigo-300 rounded"> {{ $rp->name}}</span>
                   
                   @empty
                   <span class="m-1 p-1 text-red-800"> pas de rôle assigné</span>
                   
                   @endforelse
                  </th>
                <td class="whitespace-nowrap px-6 py-4">
                  <div class="flex space-x-2">                
                    <a href="{{route('admin.roles.edit', $role)}}">Edit</a>
                    <form action="{{ route('admin.roles.destroy', $role)}}" method="POST" onsubmit="return confirm('etes vous en sûr ?');">
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
</div>

@endsection
