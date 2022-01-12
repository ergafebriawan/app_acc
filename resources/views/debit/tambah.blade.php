<x-adminlte-card title="Tambahkan Debit" theme="dark" icon="fas fa-plus">
    <form action="/debit_add" method="post">
        @csrf
        <input type="hidden" name="user" value="{{Auth::user()->name}}"/>
        <x-adminlte-input name="nama_debit" label="Trnsaksi Debit" placeholder="masukan nama debit" igroup-size="md" autofocus>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="far fa-credit-card text-light"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="debit_by" label="Dari" placeholder="debit dari ....." igroup-size="md">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="far fa-credit-card text-light"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="total" label="Total" placeholder="" type="number" igroup-size="md" min=1 disable>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-textarea name="desc" label="Description" rows=5 igroup-size="sm"
            placeholder="Insert description...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-light"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="dark" icon="fas fa-lg fa-save" />
    </form>
</x-adminlte-card>
