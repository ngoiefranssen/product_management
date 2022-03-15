@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('register_clients.update', $register_client_show->id) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    @error('client_id')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($clients_edit as $client)
                            <option value="{{ $client->id }}" {{ $register_client_show->client_id == $client->id ? 'select' : ''}} >{{ $client->name_client }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('agent_id')
                        <div class="text-blue-600">{{ $success }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="agent_id" id="agent_id">
                        @foreach($agents_edit as $agent)
                            <option value="{{ $agent->id }}" {{ $register_client_show->agent_id == $agent->id ? 'selected' : '' }}>{{ $agent->name_agent }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6">
                    @error('data_now')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="datetime-local" name="data_now" value="{{ $register_client_edit->data_now }}" id="data_now" placeholder="" autocomplete="data_now" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection
