<div>
    <!-- This is an example component -->
    @foreach ($jobs as $job)
        <div class='flex  mt-2 justify-center'>
            <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                        <div class="text-lg font-bold text-slate-700">{{ $job->name_project }}</div>
                    </div>
                    <div class="flex items-center space-x-8">
                        <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold"
                            wire:click="detail({{ $job->id }})">Detail</button>
                        <div class="text-xs text-neutral-500">2 hours ago</div>
                    </div>
                </div>

                <div class="mt-4 mb-6">
                    {{-- <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus neque?</div> --}}
                    <div class="text-sm text-neutral-600">{{ $job->location_project }}. <br> start:
                        {{ $job->time_start }} <br>end: {{ $job->time_end }} </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
