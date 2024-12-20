<div>
    <div class="w-[210mm] h-[297mm] bg-white mx-auto my-4 ">
        <div class=" print:hidden">
            <h1 class="font-bold text-4xl mb-3">

                {!! $this->colorizeText('Ella & Idas Mathe Puzzle ') !!} 🥰
            </h1>
            <div class="grid grid-cols-3 gap-3 mb-3">
                <flux:input wire:model="max" type="number" step="1" min="1" max="10000" label="Zahl" />
                <flux:input wire:model="grid" type="number" step="1" min="3" max="10" label="Spalten" />
                <flux:select variant="listbox" multiple name="operations[]" wire:model="operations" label="Operatoren">
                    <flux:option>+</flux:option>
                    <flux:option>-</flux:option>
                </flux:select>

            </div>
            <flux:input wire:model="background" label="Bild" />
        </div>
        <div class="grid grid-cols-<?= $grid ?> grid-rows-3 h-[130mm]">
            <?php foreach ($tasks as $task) : ?>
            <div class="border border-gray-600 p-4 h-full"><?= $task['task'] ?></div>
            <?php endforeach; ?>
        </div>
        <div style="background-image: url('{{ $background }}'); background-size: cover; background-position: center" class="grid grid-cols-<?= $grid ?> grid-rows-3 h-[130mm]">
            <?php foreach ($tasks as $task) : ?>
            <div class="border border-gray-600 p-4 h-full font-bold">
                <span class="bg-white bg-opacity-75 underline inline-block rounded-sm px-1"><?= $task['result'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>
