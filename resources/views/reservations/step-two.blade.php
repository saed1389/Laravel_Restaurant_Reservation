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
                                <div class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-lg">Step 2</div>
                            </div>
                            <form method="post" action="{{ route('reservation.store.step.two') }}">
                                @csrf
                                <div class="mt-4 mb-4">
                                    <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
                                    <select name="table_id" id="table_id" class="form-multiselect block w-full mt-1 rounded-lg">
                                        @foreach($tables as $table)
                                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{ route('reservation.step.one') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
