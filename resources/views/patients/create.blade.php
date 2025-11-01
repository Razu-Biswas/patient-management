@extends('layout')
@section('content')
<h4 class="text-2xl font-bold mb-4">Add Patient</h4>
<form action="{{ route('patients.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
@csrf
@include('patients.form')
<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Submit</button>
</form>
@endsection
