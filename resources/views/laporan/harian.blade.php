@php
$datas = [];
$no = 1;
foreach ($data as $d) {
    $dt = [
        $no,
        $d->nama_debit,
        $d->jumlah,
        'Rp ' . $d->total,
        '<nobr><a href="/debit_update/' .
        $d->id .
        '" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>
                        </nobr>',
    ];
    $datas[] = $dt;
    $no++;
}
$heads = ['No', 'Nama transaksi', 'Jumlah', 'Total Harga', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
// dd($datas);
$config = [
    'data' => $datas,
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable class="py-3" id="table2" :heads="$heads" head-theme="dark" :config="config" striped hoverable bordered compressed>
    @foreach ($config['data'] as $row)
        <tr>
            @foreach ($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>
