@extends('adminlte::page')

@section('title', 'Debit')

@section('content')
    <div class="row pt-2">
        <div class="col-md-8 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h1><strong> Debit</strong></h1>
                </div>
                <div class="col-md-6">
                    <h3 class="text-right mt-2"><strong> Rp {{ number_format($seluruh, 0, '', '.') }}</strong></h3>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <x-adminlte-alert theme="success" title="Success" dismissable>
                    <small>{{ $message }}</small>
                </x-adminlte-alert>
            @endif
            @if ($message = Session::get('failed'))
                <x-adminlte-alert theme="danger" title="Gagal" dismissable>
                    <small>{{ $message }}</small>
                </x-adminlte-alert>
            @endif
            {{-- Setup data for datatables --}}
            @php
                $datas = [];
                $no = 1;
                foreach ($data as $d) {
                    $dt = [
                        $no,
                        $d->tgl,
                        $d->nama_debit,
                        $d->debit_by,
                        'Rp ' . number_format($d->total, 0, '', '.'),
                        '<nobr><a href="/debit_update/' .
                        $d->id .
                        '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                                                        <a href="/debit_delete/' .
                        $d->id .
                        '"class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></a>
                                                        <a class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalCustom' .
                        $d->id .
                        '" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>
                                                        </nobr>',
                    ];
                    $datas[] = $dt;
                    $no++;
                }
                $heads = ['No', 'Tanggal', 'Transaksi Debit', 'dari', 'Jumlah', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
                // dd($datas);
                $config = [
                    'data' => $datas,
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, null, ['orderable' => false]],
                ];
                $config['dom'] = '<"row" <"col-sm-7" B> <"col-sm-5 d-flex justify-content-end" i> >
                                  <"row" <"col-12" tr> >
                                  <"row" <"col-sm-12 d-flex justify-content-start" f> >';
                $config['paging'] = false;
                $config['lengthMenu'] = [10, 50, 100, 500];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" class="bg-secondary" striped hoverable with-buttons compressed>
                @foreach ($config['data'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            </x-adminlte-datatable>
            @include('debit.detail')
        </div>
        <div class="col-md-4">
            @include('debit.tambah')
        </div>


    </div>
@stop

@section('css')
@stop

@section('js')

@stop
