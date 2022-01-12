@extends('adminlte::page')

@section('title', 'Kredit')

@section('content')
    <div class="row pt-2">
        <div class="col-md-8 mb-5">
            <h1><strong> Kredit</strong></h1>
            {{-- Setup data for datatables --}}
            @php
                $datas = [];
                $no = 1;
                foreach ($data as $d) {
                    $dt = [
                        $no,
                        $d->nama_kredit,
                        $d->jumlah,
                        'Rp ' . $d->total,
                        '<nobr><a href="/kredit_update/' .
                        $d->id .
                        '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                                        <a href="/kredit_delete/' .
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
                $heads = ['No', 'Nama Kredit', 'Jumlah', 'Total Harga', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
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
                $config['lengthMenu'] = [10, 50, 100, 500, 50];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" class="bg-teal" striped hoverable with-buttons compressed>
                @foreach ($config['data'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            </x-adminlte-datatable>
            @include('kredit.detail')
        </div>
        <div class="col-md-4">
            @include('kredit.tambah')
        </div>


    </div>
@stop

@section('css')
@stop

@section('js')

@stop
