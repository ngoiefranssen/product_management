@extends('layouts.home')
@section('content')

<div class="my-6 ml-10 flex flex-rigth m-5">
    <a href="{{ route('suppliers.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-1">Add_Supplier</a>
</div>

<div class="container flex justify-center mx-auto my-5">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                            <th class="px-6 py-2 text-xs text-gray-500">First_Name</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Kind</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Age</th>
                            {{-- <th class="px-6 py-2 text-xs text-gray-500">Country</th> --}}
                            <th class="px-6 py-2 text-xs text-gray-500">Common</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Avenue</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Number</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>
                        </tr>

                    </thead>
                    <tbody class="bg-white">

                        @if($suppliers->count())

                        @foreach($suppliers as $supplier)

                        <tr class="whitespace-nowrap">

                            <td class="px-6 py-4 text-sm text-gray-500">{{ $supplier->id }}</td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $supplier->name_supplier }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $supplier->fisrt_name_supplier }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $supplier->kind_supplier }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500">{{ $supplier->age_supplier }}</div>
                            </td>

                            {{-- <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500">{{ $supplier->country_supplier }}</div>
                            </td> --}}

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500">{{ $supplier->common_supplier }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500">{{ $supplier->avenue_supplier }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500">{{ $supplier->number_supplier }}</div>
                            </td>

                            <td class="px-6 py-4">

                                <a href="" class=""><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('suppliers.edit', $supplier->id ) }}" class=""><i class="far fa-edit"></i></a>
                                <a href="{{ route('deleteSupplier.delete', $supplier->id ) }}" class=""><i class="fas fa-trash-alt"></i></a>

                                {{-- <form action="" method="POST">
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
