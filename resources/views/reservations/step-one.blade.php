<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full" src="{{ asset('images/1.jpg') }}" alt="">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div class="w-50 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-lg">Step 1</div>
                            </div>
                            <form method="post" action="{{ route('reservation.store.step.one') }}">
                                @csrf
                                <div class="mt-4 mb-4">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-4 mb-4">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-4 mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" name="email" value="{{ $reservation->email ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-4 mb-4">
                                    <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                    <input type="text" name="tel_number" id="tel_number" value="{{ $reservation->tel_number ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                @error('tel_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-4 mb-4">
                                    <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                                    <input type="datetime-local" name="res_date" id="res_date" min="{{ $min_date }}" max="{{ $max_date }}" value="{{ $reservation->res_date ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                <span class="text-xs">Please choose the time between 17:00 - 23:00.</span>
                                @error('res_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-4 mb-4">
                                    <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                                    <input type="number" name="guest_number" id="guest_number" value="{{ $reservation->guest_number ?? '' }}" class="block w-full px-4 py-2 text-sm border rounded-md bg-white border-gray-400 focus:border-blue-400 focus:outline">
                                </div>
                                @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="flex justify-end">
                                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
