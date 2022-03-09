@extends('layouts.home')
@section('content')

<div class="my-6 ml-10 flex flex-rigth m-5">
    <a href="{{ route('purchases.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-1">Add_Purchases</a>
</div>
<div class="container flex justify-center mx-auto my-5">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_agent</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_client</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_product</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Quantity</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Date_purchase</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Date_exepedition</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Ref_sender</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @if($purchases->count())
                            @foreach($purchases as $purchase)

                                <tr class="white space-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $purchase->id }}</td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $purchase->agent->name_agent }}</div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $purchase->client->name_client }}</div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">{{ $purchase->product->name_product }}</div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500" >{{ $purchase->quantity_pur }}</div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500">{{ $purchase->date_purchase }}</div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500">{{ $purchase->date_exepedition }}</div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500">{{ $purchase->ref_sender }}</div>
                                    </td>

                                    <td class="px-6 py-4">

                                        <a href="" class=""><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('purchases.edit', $purchase->id ) }}"><i class="far fa-edit"></i></a>
                                        <a href="{{ route('delete_purchase.delete', $purchase->id) }}"><i class=" fas fa-trash-alt"></i></a>

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
