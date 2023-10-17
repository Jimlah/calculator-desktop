<?php

use function Livewire\Volt\{state,computed, rules};

state(['statement' => '']);

rules(['statement' => ['required']]);

$result = computed(function (){
	if($this->statement === ""){
		return  $this->statement;
    }
	$res = "";
	eval("\$res .= $this->statement;");
	return $res;
});

$add = function ($value){
    $this->statement .= $value;
};
?>

<div class="h-screen w-full bg-white dark:bg-zinc-950 flex flex-col justify-end text-zinc-950 dark:text-white relative">
    <x-dark-mode />
    <div class="p-6">
        <p class="text-end text-xl font-semibold">{{$statement}}</p>
        <p class="text-end text-5xl font-semibold">{{ $this->result }}</p>
    </div>
    <div class="grid grid-cols-4 gap-6 p-6 bg-zinc-200 dark:bg-zinc-900 rounded-t-3xl">
       @for($i=0; $i<20; $i++)
           <x-number-button wire:click="$set('statement', $wire.statement + '{{ $i }}')">
               {{$i}}
           </x-number-button>
       @endfor
    </div>
</div>
