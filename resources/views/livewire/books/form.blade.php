<div>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-12 space-y-3">
            <div class="col-span-12">
                <x-form.input-text wire:model="state.title" label="Nome"/>
            </div>
            <div class="col-span-12">
                <input type="file" wire:model="state.photo"/>
            </div>
            <div class="col-span-12">
                <x-form.button label="Enviar"/>
            </div>
        </div>
    </form>
</div>
