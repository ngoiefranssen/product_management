@extends('layouts.home')
@section('content')

<div class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white md:shadow-lg shadow-none rounded p-6 w-96" >
        <h1 class="text-3xl text-center font-bold leading-normal" >Update Role</h1>
        <p class="text-sm leading-normal">Edit the information in front of you if you want to do so</p>
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
        <form class="space-y-5 mt-5" action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4 relative">
                <input id="name_role" value="{{ $role->name_role }}" name="name_role" class="w-full rounded px-3 border border-gray-500 pt-5 pb-2 focus:outline-none input active:outline-none" type="text" autofocus>
                @error('name_role')
                    <div class="text-blue-600 text-center">{{$succes}}</div>
                @enderror
            </div>

            <button class="w-full text-center bg-blue-700 hover:bg-blue-900 rounded-full text-white py-3 font-medium" type="submit">Update</button>
        </form>
    </div>

    {{-- <p>New to LinkedIn?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Join now</a></p> --}}
</div>

@endsection
