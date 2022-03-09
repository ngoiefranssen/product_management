@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('peoples.store') }}" method="POST" class="">
            @csrf
            @method('post')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_people')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="name_people" id="name_people" placeholder="Enter the..." autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('role_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="role_id" id="role   _id">
                        @foreach($roles as $role)
                            <option value = "Choississez un role correspondant">Choose a relevant role</option>
                            <option value = "{{ $role->id }}">{{ $role->name_role }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('first_name')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="first_name" id="first_name" placeholder="Enter First_name" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('kind')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <select id="kind" name="kind" autocomplete="kind" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>choose the gender</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('age')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="age" id="age" placeholder="Enter Age" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('common')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                  <input type="text" name="common" id="common" placeholder="Enter common" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('piece')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="piece" id="piece" placeholder="Enter piece" autocomplete="piece" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('avenue')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="avenue" id="avenue" placeholder="Enter avenue" autocomplete="avenue" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    @error('number')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="number" id="number" placeholder="Enter number" autocomplete="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
