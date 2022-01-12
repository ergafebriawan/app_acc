@foreach ($data as $detail)
    <x-adminlte-modal id="modalCustom{{ $detail->id }}" title="Detail Kredit" size="lg" theme="dark"
        icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div style="height:800px;">
            <table class="table">
                <tr>
                    <td><small><strong>Nama Kredit</strong></small></td>
                    <td><small>: {{ $detail->nama_kredit }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Admin </strong></small></td>
                    <td><small>: {{ $detail->user }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Jumlah Barang</strong></small></td>
                    <td><small>: {{ $detail->jumlah }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Satuan Harga</strong></small></td>
                    <td><small>: {{ $detail->harga }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Total Kredit</strong></small></td>
                    <td><small>: {{ $detail->total }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Keterangan</strong></small></td>
                    <td><small>: {{ $detail->keterangan }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Dibuat pada</strong></small></td>
                    <td><small>: {{ $detail->created_at }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Diedit pada</strong></small></td>
                    <td><small>: {{ $detail->updated_at }}</small></td>
                </tr>
            </table></div>
        <x-slot name="footerSlot">
            <x-adminlte-button class="mr-auto" theme="success" label="edit" />
            <x-adminlte-button theme="dark" label="hapus" />
            <x-adminlte-button theme="danger" label="Tutup" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
@endforeach
