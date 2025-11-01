<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block mb-1">Name</label>
        <input type="text" name="name" value="{{ old('name', $patient->name ?? '') }}" class="border p-2 w-full">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Age</label>
        <input type="number" name="age" value="{{ old('age', $patient->age ?? '') }}" class="border p-2 w-full">
        @error('age')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Gender</label>
        <select name="gender" class="border p-2 w-full">
            <option value="">Select</option>
            @foreach (['Male', 'Female', 'Other'] as $gender)
                <option value="{{ $gender }}"
                    {{ old('gender', $patient->gender ?? '') == $gender ? 'selected' : '' }}>{{ $gender }}
                </option>
            @endforeach
        </select>
        @error('gender')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $patient->phone ?? '') }}"
            class="border p-2 w-full">
        @error('phone')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Address</label>
        <textarea name="address" class="border p-2 w-full">{{ old('address', $patient->address ?? '') }}</textarea>
        @error('address')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Disease</label>
        <input type="text" name="disease" value="{{ old('disease', $patient->disease ?? '') }}"
            class="border p-2 w-full">
        @error('disease')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="block mb-1">Admission Date</label>
        <input type="date" name="admission_date" value="{{ old('admission_date', $patient->admission_date ?? '') }}"
            class="border p-2 w-full">
        @error('admission_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>
