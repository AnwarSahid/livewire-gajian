<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    @if (session()->has('succes'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif
    <form wire:submit.prevent="create">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-first-name">
                    Nama Projek
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-first-name" wire:model="name_project" type="text" placeholder="Pembangunan Proyek A B C">
                {{-- <p class="text-red text-xs italic">Please fill out this field.</p> --}}
                @error('name_project')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
                {{-- <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                Lokasi Projek
            </label>
            <input
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                id="grid-last-name" type="text" placeholder="Doe"> --}}
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-password">
                    Lokasi Proyek
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                    id="grid-password" wire:model="location_project" type="text" placeholder="Jl.Lintas Liwa no.4">
                {{-- <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                @error('location_project')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                    Tanggal Mulai
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-city" wire:model="time_start" type="date" placeholder="09/10/2023">
                @error('time_start')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Tanggal Selesai
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-zip" wire:model="time_end" type="date" placeholder="09/10/2022">
                @error('time_end')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">

            </div>
        </div>

        <button
            class="block uppercase shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline
            focus:outline-none text-white text-xs py-3 px-10 rounded">save

        </button>


    </form>


</div>
