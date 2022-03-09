@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('suppliers.update', $supplier->id ) }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_supplier')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" value="{{ $supplier->name_supplier }}" name="name_supplier" id="name_supplier" placeholder="Enter name..." autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                {{-- <div class="col-span-6 sm:col-span-3">
                    @error('role_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="role_id" id="role   _id">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name_product }}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="col-span-6 sm:col-span-3">
                    @error('fisrt_name_supplier')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" value="{{ $supplier->fisrt_name_supplier }}" name="fisrt_name_supplier" id="fisrt_name_supplier" placeholder="Enter First name ..." autocomplete="fisrt_name_supplier" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('kind_supplier')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <select id="kind_supplier" name="kind_supplier" autocomplete="kind_supplier" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>{{ $supplier->kind_supplier }}</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('age_supplier')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="number" value="{{ $supplier->age_supplier }}" name="age_supplier" id="age_supplier" placeholder="Enter Age" autocomplete="age_supplier" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('country_supplier')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" value="{{ $supplier->country_supplier }}" name="country_supplier" id="country_supplier" placeholder="Enter country......." autocomplete="country_supplier" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('common_supplier')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                  <input type="text" value="{{ $supplier->common_supplier }}" name="common_supplier" id="common_supplier" placeholder="Enter common" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('avenue_supplier')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" value="{{ $supplier->avenue_supplier }}" name="avenue_supplier" id="avenue_supplier" placeholder="Enter avenue...." autocomplete="avenue" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="c ol-span-6 sm:col-span-3 ">
                    @error('number_supplier')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="number" value="{{ $supplier->number_supplier }}" name="number_supplier" id="number_supplier" placeholder="Enter number..." autocomplete="number_supplier" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
