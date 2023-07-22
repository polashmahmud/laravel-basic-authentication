@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
       <form action="{{ route('register') }}" method="POST" class="w-4/12 bg-white p-6 rounded-lg">
           @csrf
           <div class="mb-4">
               <label for="name" class="sr-only">Name</label>
               <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror">
               @error('name')
                <div class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </div>
               @enderror
           </div>
           <div class="mb-4">
               <label for="email" class="sr-only">Email</label>
               <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror">
               @error('email')
               <div class="text-red-500 text-sm mt-2">
                   {{ $message }}
               </div>
               @enderror
           </div>
           <div class="mb-4">
               <label for="password" class="sr-only">Password</label>
               <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
               @error('password')
               <div class="text-red-500 text-sm mt-2">
                   {{ $message }}
               </div>
               @enderror
           </div>
           <div class="mb-4">
               <label for="password_confirmation" class="sr-only">Password aging</label>
               <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your password aging" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
           </div>
           <div>
               <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit">Register</button>
           </div>
       </form>
    </div>
@endsection
