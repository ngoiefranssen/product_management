@extends('layouts.home')
@section('content')

<div class="my-6 ml-10 flex flex-rigth m-5">
    <a href="{{ route('deliveries.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-1">Add_Deliveries</a>
</div>

<div class="container flex justify-center mx-auto my-5">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_Agent</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_Suppliers</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Description</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>
                        </tr>

                    </thead>
                    <tbody class="bg-white">

                        @if($deliveries->count())
                        @foreach($deliveries as $delivery)

                        <tr class="whitespace-nowrap">

                            <td class="px-6 py-4 text-sm text-gray-500">{{ $delivery->id }}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $delivery->agent->name_agent }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $delivery->supplier->name_supplier }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $delivery->description_deliv }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class=""><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('deliveries.edit', $delivery->id ) }}" class=""><i class="far fa-edit"></i></a>
                                <a href="{{ route('deleteDelivery.delete', $delivery->id ) }}" class=""><i class="fas fa-trash-alt"></i></a>
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
