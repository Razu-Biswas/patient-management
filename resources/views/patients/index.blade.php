@extends('layout')

@section('content')

@if(session('success'))
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    Toastify({
        text: "✅ {{ session('success') }}",
        duration: 5000,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        className: "custom-toast",
        style: {
            borderRadius: "10px",
            fontSize: "16px",
            fontWeight: "600",
            color: "#fff",
            boxShadow: "0 4px 15px rgba(0,0,0,0.2)",
            padding: "15px 25px",
            minWidth: "300px",
            maxWidth: "350px",
        },
        onClick: function() {
            console.log("Toast clicked!");
        }
    }).showToast();
</script>
@endif




<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-2">
    <h1 class="text-2xl font-bold">Patients</h1>
    <a href="{{ route('patients.create') }}"
       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4v16m8-8H4" />
        </svg>
        Add Patient
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full min-w-[600px] bg-white rounded shadow">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 text-left">Name</th>
                <th class="p-2 text-left">Age</th>
                <th class="p-2 text-left">Gender</th>
                <th class="p-2 text-left">Phone</th>
                <th class="p-2 text-left">Address</th>
                <th class="p-2 text-left">Disease</th>
                <th class="p-2 text-left">Admission Date</th>
                <th class="p-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr class="border-b">
                <td class="p-2">{{ $patient->name }}</td>
                <td class="p-2">{{ $patient->age }}</td>
                <td class="p-2">{{ $patient->gender }}</td>
                <td class="p-2">{{ $patient->phone }}</td>
                <td class="p-2">{{ $patient->address }}</td>
                <td class="p-2">{{ $patient->disease }}</td>
                <td class="p-2">{{ $patient->admission_date }}</td>
                <td class="p-2 flex flex-col md:flex-row gap-2">

                    <a href="{{ route('patients.edit', $patient->id) }}"
                       class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15.232 5.232l3.536 3.536M16.5 4.5l3 3-10 10H6v-3.5l10-10z" />
                        </svg>

                    </a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded flex items-center gap-1"
                                onclick="return confirm('Are you sure you want to delete this patient?')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v1h6V4a1 1 0 00-1-1m-4 0h4" />
                            </svg>

                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
