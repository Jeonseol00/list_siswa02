<x-filament::page>
    <div class="p-4">
        <h2 class="text-lg font-bold mb-4">Impor Data Siswa</h2>
        <p class="mb-4">Unggah file Excel untuk mengimpor data siswa ke dalam sistem.</p>
        
        <form wire:submit.prevent="importData">
            {{ $this->form }}
            <div class="mt-4">
                <x-filament::button type="submit">Impor Data</x-filament::button>
            </div>
        </form>
    </div>
</x-filament::page>
