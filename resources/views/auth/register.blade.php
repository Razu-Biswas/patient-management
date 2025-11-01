@extends('layout')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
<h1 class="text-xl font-bold mb-4">Register</h1>
<form method="POST" action="{{ route('register') }}">
@csrf
<input type="text" name="name" placeholder="Name" class="border p-2 w-full mb-2">
<input type="email" name="email" placeholder="Email" class="border p-2 w-full mb-2">
<input type="password" name="password" placeholder="Password" class="border p-2 w-full mb-2">
<input type="password" name="password_confirmation" placeholder="Confirm Password" class="border p-2 w-full mb-2">
<button class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
</form>
<p class="mt-3 text-sm">Already have an account? <a href="/login" class="text-blue-600 font-semibold">Login</a></p>
</div>
@endsection
