@extends('layouts.home')
@section('content')

<div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl text-center font-bold leading-normal" >Update Category</h1>
        <p class="text-sm leading-normal">Edit the information in front of you if you want to do so</p>
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
        <form class="space-y-5 mt-5" action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4 relative">
                <input id="name_category" name="name_category" value="{{ $category->name_category }}" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('name_category')
                    <div class="text-blue-600 text-xs text-center">{{ $succes }}</div>
                @enderror
            </div>
            <div class="mb-4 relative">
                <input id="descripton_cat" value="{{ $category->description_cat }}" name="description_cat" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('description_cat')
                    <div class="text-blue-600 text-xs text-center">{{ $succes }}</div>
                @enderror
            </div>
            <button class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium" type="submit">Register</button>
        </form>
    </div>

    {{-- <p>New to LinkedIn?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Join now</a></p> --}}
</div>


@endsection