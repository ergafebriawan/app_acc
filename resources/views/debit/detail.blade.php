@foreach ($data as $detail)
    <x-adminlte-modal id="modalCustom{{ $detail->id }}" title="Detail Kredit" size="lg" theme="dark"
        icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div style="height:800px;">
            <table class="table">
                <tr>
                    <td><small><strong>No. Transaksi</strong></small></td>
                    <td><small>: BD01-00{{ $detail->id }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Tanggal Transaksi</strong></small></td>
                    <td><small>: {{ $detail->tgl }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Nama Kredit</strong></small></td>
                    <td><small>: {{ $detail->nama_debit }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Dari</strong></small></td>
                    <td><small>: {{ $detail->debit_by }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Admin </strong></small></td>
                    <td><small>: {{ $detail->user }}</small></td>
                </tr>
                <tr>
                    <td><small><strong>Total</strong></small></td>
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
            <x-adminlte-button href="/debit_delete/{{$detail->id}}" theme="dark" label="hapus" />
            <x-adminlte-button theme="danger" label="Tutup" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
@endforeach
