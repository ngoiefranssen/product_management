@extends('layouts.home')
@section('content')

<div class="my-6 ml-10 flex flex-rigth m-5">
    <a href="{{ route('agents.create') }}" class="flex flex-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded my-3 ml-1">Add_agent</a>
</div>
<div class="container flex justify-center mx-auto my-5">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">#</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Name_Client</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Fisrt_Name_Agent</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Kind_agent</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Age_agent</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Country</th>
                            {{-- <th class="px-6 py-2 text-xs text-gray-500">Common</th> --}}
                            <th class="px-6 py-2 text-xs text-gray-500">Avenue</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Number</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @if($agents->count())

                        @foreach($agents as $agent)

                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $agent->id }}</td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $agent->client->name_client }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $agent->fisrt_name_agent }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->kind_agent }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->age_agent }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->country_agent }}</div>
                            </td>

                            {{-- <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->common_agent }}</div>
                            </td> --}}

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->avenue_agent }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-500">
                                <div class="text-sm text-gray-500" >{{ $agent->number_agent }}</div>
                            </td>

                            <td class="px-6 py-4">

                                <a href="" class=""><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('agents.edit', $agent->id ) }}"><i class="far fa-edit"></i></a>
                                <a href="{{ route('agent.delete', $agent->id ) }}"><i class=" fas fa-trash-alt"></i></a>
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
