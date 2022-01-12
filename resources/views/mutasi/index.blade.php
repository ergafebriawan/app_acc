@extends('adminlte::page')

@section('title', 'Mutasi')

@section('content_header')
    <h1><strong> Mutasi</strong></h1>
@stop

@section('content')
            {{-- Setup data for datatables --}}
            @php
                $datas = [];
                foreach ($data as $d) {
                    $dt = [
                        $d->id, 
                        $d->nama_kredit, 
                        $d->jumlah,
                        'Rp '.$d->total,
                        '<nobr><a href="/kredit_update/'.$d->id.'" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                        <a href="/kredit_delete/'.$d->id.'"class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></a>
                        <a href="/kredit_activate/'.$d->id.'/'.$d->active.'"class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>
                        </nobr>'
                    ];
                    $datas[] = $dt;
                }
                
                $config = [
                    'data' => $datas,
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, ['orderable' => false]],
                ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table2" :heads="$heads" :config="$config">
                @foreach ($config['data'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            </x-adminlte-datatable>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
