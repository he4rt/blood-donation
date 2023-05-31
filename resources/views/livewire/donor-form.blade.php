<div class="w-full">
    <form class="h-auto" wire:submit.prevent="submit">
        {{ $this->form }}

        <button
            class="p-1 w-full font-heading font-semibold text-xs text-gray-900 uppercase tracking-px overflow-hidden rounded-md">
            <div class="relative p-5 px-11 bg-gradient-green overflow-hidden rounded-md">
                <div
                    class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full bg-white transition ease-in-out duration-500"></div>
                <p class="relative z-10">Send message</p>
            </div>
        </button>
    </form>
</div>
