<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job') }}
        </h2>
    </x-slot>

    @if (session()->has('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <livewire:show-project />
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
