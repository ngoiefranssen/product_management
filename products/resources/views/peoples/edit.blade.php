@extends('layouts.home')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-0 md:gap-6">
        <p class="text-sm leading-center"></p>
        {{-- <div>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
      <div class="mt-5 md:mt-0 md:col-span-2 flex justify-center pt-14">
        <form action="{{ route('peoples.update', $people->id) }}" method="POST" class="">
            @csrf
            @method('PUT')
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    @error('name_people')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="name_people" id="name_people" placeholder="Enter the..." value="{{ $people->name_people }}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('role_id')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                    <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="role_id" id="role_id">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $people->role_id == $role->id  ? 'select' : ''}}>{{ $role->name_role }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('first_name')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="first_name" value="{{ $people->first_name }}" id="first_name" placeholder="Enter First_name" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">

                    @error('kind')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <select id="kind" name="kind" autocomplete="kind" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $people->kind }}">{{ $people->kind }}</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('age')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="age" value="{{ $people->age }}" id="age" placeholder="Enter Age" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('common')
                        <div class="text-blue-600">{{ $message }}</div>
                     @enderror
                  <input type="text" name="common" value="{{ $people->common }}" id="common" placeholder="Enter common" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('piece')
                        <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                  <input type="text" name="piece" id="piece" value="{{ $people->piece }}" placeholder="Enter piece" autocomplete="piece" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    @error('avenue')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="avenue" value="{{ $people->avenue }}" id="avenue" placeholder="Enter avenue" autocomplete="avenue" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    @error('number')
                         <div class="text-blue-600">{{ $message }}</div>
                    @enderror
                    <input type="text" name="number" value="{{ $people->number }}" id="number" placeholder="Enter number" autocomplete="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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


{{-- <div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl text-center font-bold leading-normal" >Update People</h1>
        <p class="text-sm leading-normal"></p>
        <div>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form class="space-y-5 mt-5"  action="{{ route('peoples.update', $people->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4 relative">
                <select class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" name="role_id" id="role_id">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $people->role_id == $role->id ? 'select' : '' }}>{{ $role->name_role }}</option>
                    @endforeach
                </select>
                @error('role_id')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 relative">
                <input id="name_people" value="{{ $people->name_people }}" name="name_people" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('name_people')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 relative">
                <input id="first_name" value="{{ $people->first_name }}" name="firts_name" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('first_name')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 relative">
                <div class="mb-3 xl:w-96">
                  <select name="kind" id="kind" class="form-select form-select-lg mb-3 appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                      <option selected>choose the gender</option>
                      <option value="{{ $people->kind }}">F</option>
                      <option value="{{ $people->kink }}">M</option>
                  </select>
                  @error('kind')
                    <p class="">{{ $message }}</p>
                @enderror
                </div>
            </div>

            <div class="mb-4 relative">
                <input id="age" value="{{ $people->age }}" name="age" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('age')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="common" value="{{ $people->common }}" name="common" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('common')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="piece" value="{{ $people->piece }}" name="piece" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('piece')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="avenue" value="{{ $people->avenue }}" name="avenue" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('avenue')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 relative">
                <input id="number" value="{{ $people->number }}" name="number" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('number')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>
            <button class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium" type="submit">Register</button>
        </form>
    </div>
</div> --}}

@endsection
