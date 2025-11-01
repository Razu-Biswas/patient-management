@extends('layout')
@section('content')
<h4 class="text-2xl font-bold mb-4">Edit Patient</h4>
<form action="{{ route('patients.update', $patient->id) }}" method="POST" class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
@csrf
@method('PUT')
@include('patients.form', ['patient'=>$patient])
<button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Update</button>
</form>
@endsection
