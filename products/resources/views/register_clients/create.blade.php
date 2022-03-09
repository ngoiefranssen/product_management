@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('register_clients.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('POST')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    @error('client_id')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($clients_create as $client_create)
                            <option value="{{ $client_create->id }}">{{ $client_create->name_client }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6">
                    @error('agent_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="agent_id" id="agent_id">
                        @foreach($agents_create as $agent_create)
                            <option value="{{ $agent_create->id }}">{{ $agent_create->name_agent }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="col-span-6">
                    @error('data_now')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="data_now" id="data_now" placeholder="Enter the..." autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div> --}}
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
