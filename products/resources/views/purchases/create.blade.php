@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('purchases.store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('post')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    @error('agent_id')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="agent_id" id="agent_id">
                        @foreach( $agents_create as $agent_create )
                            <option value="{{ $agent_create->id }}">{{ $agent_create->name_agent }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    @error('client_id')
                        <div class="text-blue-600">{{ $success }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($clients_create as $client_create)
                            <option value="{{ $client_create->id }}">{{ $client_create->name_client }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    @error('product_id')
                        <div class="text-blue-600">{{ $success }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="product_id" id="product_id">
                        @foreach($products_create as $product_create)
                            <option value="{{ $product_create->id }}">{{ $product_create->name_product }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    @error('quantity_pur')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="number" name="quantity_pur" id="quantity_pur" placeholder="Enter Quantity...." autocomplete="quantity_pur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                    @error('ref_sender')
                        <div class="text-blue-600">{{ $success }}</div>
                    @enderror
                  <input type="text" name="ref_sender" id="ref_sender" placeholder="Enter ref_sender...." autocomplete="ref_sender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
