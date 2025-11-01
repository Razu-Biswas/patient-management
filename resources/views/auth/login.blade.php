@extends('layout')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
<h1 class="text-xl font-bold mb-4">Login</h1>
<form method="POST" action="{{ route('login') }}">
@csrf
<input type="email" name="email" placeholder="Email" class="border p-2 w-full mb-2">
<input type="password" name="password" placeholder="Password" class="border p-2 w-full mb-2">
<button class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
</form>
<p class="mt-3 text-sm">No account? <a href="/register" class="text-blue-600 font-semibold">Register</a></p>
</div>
@endsection
