@extends('layouts.home')
@section('content')

<div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl text-center font-bold leading-normal" >Create Categories</h1>
        <p class="text-sm leading-normal">Be sure to complete the fields in front of you for registration</p>
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
        <form class="space-y-5 mt-5" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-4 relative">
                @error('description_cat')
                    <div class="text-blue-600">{{ $success }}</div>
                @enderror
                <input id="name_category" name="name_category" placeholder="Name category" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
            </div>

            <div class="col-span-6">
                @error('description_cat')
                     <div class="text-blue-600">{{ $success }}</div>
                @enderror
                <div class="mb-4 xl:w-100">
                    <textarea class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="description_prod" type="text" name="description_prod" rows="3" placeholder="Your description...."></textarea>
                </div>
            </div>

            <button class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium" type="submit">Register</button>
        </form>
    </div>

    {{-- <p>New to LinkedIn?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Join now</a></p> --}}
</div>

@endsection
