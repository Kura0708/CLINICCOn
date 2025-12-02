@extends('index')

@section('content')
<div class="p-8 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Edit Service</h1>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.update', $service) }}" method="POST" class="bg-white rounded-lg shadow p-8">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="service_name" class="block text-sm font-medium text-gray-700 mb-2">Service Name</label>
            <input type="text" name="service_name" id="service_name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('service_name') border-red-500 @enderror" value="{{ old('service_name', $service->service_name) }}" required>
            @error('service_name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="duration" class="block text-sm font-medium text-gray-700 mb-2">Duration (HH:MM:SS)</label>
            <input type="text" name="duration" id="duration" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('duration') border-red-500 @enderror" value="{{ old('duration', $service->duration) }}" placeholder="00:30:00" required>
            <p class="text-gray-500 text-sm mt-1">Enter duration in format HH:MM:SS (e.g., 01:30:00 for 1 hour 30 minutes)</p>
            @error('duration')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-[#0086DA] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Update Service
            </button>
            <a href="{{ route('services.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
