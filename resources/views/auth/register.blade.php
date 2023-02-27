@extends('layouts.main')

@section('links')

@endsection 

@section('content')

<div class="bg-blue-400 w-full h-screen flex justify-center items-center">
  <div class="bg-white rounded-lg py-6 px-5">
    <h4 class="text-2xl text-center font-bold">Register</h4>
    <form method="POST" action="{{ route('auth.register') }}" class="mt-4 flex flex-col gap-y-3">
      @csrf
        <input type="text"  placeholder="username" class="pb-3 outline-none w-[420px] border-b border-gray-300 " name="username" value="{{ old('username') }}"> 
        @error('username')
        <p class="text-sm text-red-500 my-1 font-medium">{{ $message }}</p>
        @enderror
        <input type="email"  placeholder="email" class="pb-3 outline-none w-[420px] border-b border-gray-300 " name="email" value="{{ old('email') }}"> 
        @error('email')
        <p class="text-sm text-red-500 my-1 font-medium">{{ $message }}</p>
        @enderror
        <input type='password' placeholder="Password" class="pb-3 outline-none border-b border-gray-300 w-[350px]" name='password'/>
        @error('password')
        <p class="text-sm text-red-500 my-1 font-medium">{{ $message }}</p>
        @enderror
        <input type='password' placeholder="Confirm Password" class="pb-3 outline-none border-b border-gray-300 w-[350px]" name='confirm'/>
        @error('confirm')
        <p class="text-sm text-red-500 my-1 font-medium">{{ $message }}</p>
        @enderror
        <button type="submit" class="w-full rounded-full mt-5 py-2 text-sm bg-orange-400 text-white font-semibold">Sign Up</button>
        <p class="text-center text-gray-400 text-sm">Have an account? <a class="text-blue-500 font-semibold" href="/auth/login">Login</a></p>
    </form>
  </div>
</div>

@endsection

@section('js')

@endsection