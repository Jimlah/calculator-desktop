<div class="top-0 absolute w-full flex items-center justify-center" x-dark-mode>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="rounded-md overflow-hidden bg-zinc-200 dark:bg-zinc-800 my-2">
        <button class="p-1 group" :disabled="!$darkMode.darkMode" @click="$darkMode.toggle()">
            <x-heroicon-o-sun class="w-4 h-4 text-zinc-950 dark:text-zinc-200 group-disabled:bg-opacity-50" />
        </button>
        <button class="p-1 group" :disabled="$darkMode.darkMode" @click="$darkMode.toggle()">
            <x-heroicon-o-moon class="w-4 h-4 text-zinc-950 dark:text-zinc-200 group-disabled:bg-opacity-50" />
        </button>
    </div>
</div>
