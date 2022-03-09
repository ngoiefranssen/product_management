@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('agents.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('post')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_agent')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                    <input type="text" name="name_agent" id="name_agent" placeholder="Enter name..." autocomplete="name-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('client_id')
                        <div class="text-blue-600">{{ $success }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($clients as $client)
                            <option>Choose a relevant client</option>
                            <option value = "{{ $client->id }}">{{ $client->name_client }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('fisrt_name_agent')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="text" name="fisrt_name_agent" id="fisrt_name_agent" placeholder="Enter First_name" autocomplete="fisrt-name-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('kind_agent')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <select id="kind_agent" name="kind_agent" autocomplete="kind-agent" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>choose the gender</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('age_agent')
                         <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="number" name="age_agent" id="age_agent" placeholder="Enter Age" autocomplete="aget-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('country_agent')
                         <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="text" name="country_agent" id="country_agent" placeholder="Enter country......" autocomplete="aget-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('common_agent')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="text" name="common_agent" id="common_agent" placeholder="Enter common" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('avenue_agent')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="avenue_agent" id="avenue_agent" placeholder="Enter avenue" autocomplete="avenue-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    @error('number_agent')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="number_agent" id="number_agent" placeholder="Enter number" autocomplete="number-agent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
