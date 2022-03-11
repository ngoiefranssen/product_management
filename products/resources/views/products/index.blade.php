@extends('layouts.home')
@section('content')

<div class="my-6 ml-10 flex flex-rigth m-5">
    <a href="{{ route('products.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-1">Add Products</a>
</div>
<div class="container flex justify-center mx-auto my-5">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_Categories</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_Suppliers</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_products</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Description</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Quantity</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @if($products->count())

                        @foreach($products as $product)

                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $product->id }}</td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $product->category->name_category }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $product->supplier->name_supplier }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $product->name_product }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $product->description_prod }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $product->quantity }}</div>
                            </td>

                            <td class="px-6 py-4">

                                <a href="" class=""><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('products.edit', $product->id ) }}"><i class="far fa-edit"></i></a>
                                <a href="{{ route('deleteproduct.delete', $product->id ) }}"><i class=" fas fa-trash-alt"></i></a>

                                {{-- <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"></button>
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
