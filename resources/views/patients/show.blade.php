@extends('index')

@section('content')
<div class="p-8 max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Patient Details</h1>

    <div class="bg-white rounded-lg shadow p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Personal Information</h2>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <p class="text-gray-600 text-sm font-semibold">Name</p>
                <p class="text-lg font-bold text-gray-800">{{ $patient->first_name }} {{ $patient->last_name }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm font-semibold">Gender</p>
                <p class="text-lg text-gray-800">{{ $patient->gender ?? 'N/A' }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm font-semibold">Mobile Number</p>
                <p class="text-lg text-gray-800">{{ $patient->mobile_number ?? 'N/A' }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm font-semibold">Email</p>
                <p class="text-gray-800">{{ $patient->email_address ?? 'N/A' }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm font-semibold">Birth Date</p>
                <p class="text-lg text-gray-800">
                    {{ $patient->birth_date ? \Carbon\Carbon::parse($patient->birth_date)->format('M d, Y') : 'N/A' }}
                </p>
            </div>

            <div>
                <p class="text-gray-600 text-sm font-semibold">Occupation</p>
                <p class="text-lg text-gray-800">{{ $patient->occupation ?? 'N/A' }}</p>
            </div>

            @if($patient->home_address)
                <div class="col-span-2">
                    <p class="text-gray-600 text-sm font-semibold">Address</p>
                    <p class="text-lg text-gray-800">{{ $patient->home_address }}</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Appointments Section -->
    <div class="bg-white rounded-lg shadow p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Appointment History</h2>

        @if($patient->appointments()->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Date & Time</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Service</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patient->appointments()->orderBy('appointment_date', 'desc')->get() as $appointment)
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-2">
                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y - h:i A') }}
                                </td>
                                <td class="px-4 py-2">
                                    {{ $appointment->service->service_name ?? 'N/A' }}
                                </td>
                                <td class="px-4 py-2">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full
                                        @if($appointment->status === 'Completed') bg-green-100 text-green-800
                                        @elseif($appointment->status === 'Cancelled') bg-red-100 text-red-800
                                        @elseif($appointment->status === 'Ongoing') bg-yellow-100 text-yellow-800
                                        @else bg-blue-100 text-blue-800
                                        @endif
                                    ">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-500 text-center py-4">No appointments found for this patient.</p>
        @endif
    </div>

    <div class="flex gap-4">
        <a href="{{ route('patients.edit', $patient) }}" class="bg-[#0086DA] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit
        </a>
        <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline" onsubmit="return confirm('Delete this patient?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Delete
            </button>
        </form>
        <a href="{{ route('patients.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>
</div>
@endsection
