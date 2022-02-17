@extends('layouts.home')
@section('content')

<div class="my-12 ml-9 flex justify-left ">
    <a href="{{ route('categories.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-5">AddCategories</a>
</div>

<div class="container flex justify-center mx-auto ml-12">
    <div class="flex">
        <div class="w-full">
            <div class="border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Description</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @if($categories->count())

                        @foreach($categories as $category)

                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $category->id }}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900" >{{ $category->name_category }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $category->description_cat }}</div>
                            </td>

                            <td class="px-6 py-4">

                                <a href="" class=""><i class="far fa-eye"></i></a>
                                <a href="{{ route('categories.edit', $category->id) }}"><i class="far fa-edit"></i></a>
                                <a href="{{ route('category.delete', $category->id) }}" type="hidden" name="id"><i class=" fas fa-trash-alt"></i></a>

                                {{-- <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="px-6 py-4">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('categories.destroy', $category->id) }}" type="hidden" name="id"><i class=" fas fa-trash-alt"></i></a>
                                </form> --}}

                            </td>
                        </tr>
                        @endforeach
                        @else
                            <p class="text-blue-600 text-center">Aucune donne pour l'instant</p>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
