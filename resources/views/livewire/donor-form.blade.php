<div class="w-full">
    <form class="h-auto" wire:submit.prevent="submit">
        {{ $this->form }}

        <button class="w-full p-1 overflow-hidden text-xs font-semibold text-white uppercase rounded-xl font-heading tracking-px">
            <div
                class="relative p-4 overflow-hidden bg-purple-600 border-2 border-purple-600 rounded-md px-11">
                <div
                    class="absolute top-0 left-0 w-full h-full transition duration-500 ease-in-out transform -translate-y-full bg-purple-600 group-hover:-translate-y-0"></div>
                <p class="relative z-10">Enviar</p>
            </div>
        </button>
    </form>
</div>
