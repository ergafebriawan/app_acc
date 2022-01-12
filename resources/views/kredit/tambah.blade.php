<x-adminlte-card title="Tambahkan Kredit" theme="dark" icon="fas fa-plus">
    <form action="/kredit_add" method="post">
        @csrf
        <input type="hidden" name="user" value="{{Auth::user()->name}}"/>
        <x-adminlte-input name="nama_kredit" label="Nama Kredit" placeholder="masukan nama kredit" igroup-size="sm" autofocus>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="far fa-credit-card text-light"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="jumlah" id="jumlah" label="Jumlah" placeholder="masukan jumlah" type="number" igroup-size="sm" min=1>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-at"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="harga" id="harga" label="Harga" placeholder="masukan harga" type="number" igroup-size="sm" min=1>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="total" id="total" label="Total Harga" placeholder="" type="number" igroup-size="sm" min=1 disable>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#jumlah, #harga").keyup(function() {
            var harga  = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
        });
    });
</script>
