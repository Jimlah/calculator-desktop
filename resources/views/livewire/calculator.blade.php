<?php

use function Livewire\Volt\{state};

//

?>

<div class="h-screen w-full bg-white dark:bg-gray-950 flex flex-col justify-end text-gray-950 relative">
    <div></div>
    <div class="p-6">
        <p class="text-end text-xl font-semibold">21 * 1000</p>
        <p class="text-end text-5xl font-semibold">21,000</p>
    </div>
    <div class="grid grid-cols-4 gap-6 p-6 bg-gray-200 dark:bg-gray-800 rounded-t-3xl">
       @for($i=0; $i<20; $i++)
           <button class="flex items-center justify-center w-16 h-16 aspect-square text-lg font-semibold bg-gray-300/10 dark:bg-gray-900/10 rounded-lg">
               <span>{{$i}}</span>
           </button>
       @endfor
    </div>
</div>
