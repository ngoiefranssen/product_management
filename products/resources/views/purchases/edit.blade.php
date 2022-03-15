@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('purchases.update', $purchase_edit->id) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('product_id')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="product_id" id="product_id">
                        @foreach($products_edit as $product_edit)
                            <option value="{{ $product_edit->id }}" {{ $purchase_edit->product_id == $product_edit->id ? 'select' : ''}}>{{ $product_edit->name_product }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    @error('client_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($clients_edit as $client_edit)
                            <option value="{{ $client_edit->id }}" {{ $purchase_edit->client_id == $client_edit->id ? 'select' : ''}}>{{ $client_edit->name_client }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('agent_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="client_id" id="client_id">
                        @foreach($agents_edit as $agent_edit)
                            <option value="{{ $agent_edit->id }}" {{ $purchase_edit->agent_id == $agent_edit->id ? 'select' : ''}}>{{ $agent_edit->name_agent }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('quantity_pur')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="number" name="quantity_pur" value="{{ $purchase_edit->quantity_pur }}" id="quantity_pur" placeholder="Enter Quantity...." autocomplete="quamtity_pur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('date_purchase')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="datetime-local" value="{{ $purchase_edit->date_purchase }}" name="date_purchase" id="date_purchase" placeholder="modify date purchase" autocomplete="date purchase" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    @error('date_expedition')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="datetime-local" value="{{ $purchase_edit->date_expedition }}" name="date_expedition" id="date_expedition" placeholder="modify date expedition" autocomplete="date expedition" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6">
                    @error('ref_sender')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <div class="mb-4 xl:w-100">
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="ref_sender" name="ref_sender" rows="4" placeholder="Your ref_sender....">{{ $purchase_edit->ref_sender }}</textarea>
                    </div>
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