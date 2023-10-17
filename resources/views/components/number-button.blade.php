<button {{ $attributes->merge(['class' => "flex items-center justify-center w-16 h-16 aspect-square text-lg font-semibold bg-zinc-300/10 dark:bg-zinc-900/10 rounded-lg"]) }}>
    <span>{{$slot}}</span>
</button>
