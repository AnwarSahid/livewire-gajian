<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <p> id :{{ $detail->id }}</p>
                    <p> project:{{ $detail->name_project }}</p>
                    <p> lokasi Project: {{ $detail->location_project }}</p>
                    <p> Waktu Mulai:{{ $detail->time_start }}</p>
                    <p> Waktu Selesai:{{ $detail->time_end }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
