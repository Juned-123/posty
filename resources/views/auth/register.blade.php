@extends('layout.app')
@section('content')
    <div class="flex justify-center">
      <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <lable for="name" class="sr-only">Name</lable>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">
                @error('name')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <lable for="username" class="sr-only">Username</lable>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('username')}}">
                @error('username')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <lable for="email" class="sr-only">Email</lable>
                <input type="email" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">
                @error('email')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <lable for="password" class="sr-only">Password</lable>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                @error('password')
                 <div class="text-red-500 pl-2 mt-2 text-sm">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-4">
                <lable for="password_confirmation" class="sr-only">Confirm Password</lable>
                <input type="password" name="password_confirmation" id="password" placeholder="Confirm Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-semibold w-full">
                    Register
                </button>
            </div>
        </form>
      </div>
    </div>
@endsection 