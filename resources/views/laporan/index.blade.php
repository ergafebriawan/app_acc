@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
    <h1><strong>Laporan</strong></h1>
@stop

@section('content')
    <x-adminlte-date-range name="drCustomRanges" enable-default-ranges="Last 30 Days">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-date-range>
    {{-- <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-harian-tab" data-toggle="tab" href="#nav-harian" role="tab"
                aria-controls="nav-harian" aria-selected="true">Harian</a>
            <a class="nav-link" id="nav-mingguan-tab" data-toggle="tab" href="#nav-mingguan" role="tab"
                aria-controls="nav-mingguan" aria-selected="false">Mingguan</a>
            <a class="nav-link" id="nav-bulanan-tab" data-toggle="tab" href="#nav-bulanan" role="tab"
                aria-controls="nav-bulanan" aria-selected="false">Bulanan</a>
            <a class="nav-link" id="nav-tahunan-tab" data-toggle="tab" href="#nav-tahunan" role="tab"
                aria-controls="nav-tahunan" aria-selected="false">Tahunan</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        {{-- <div class="tab-pane fade show active" id="nav-harian" role="tabpanel" aria-labelledby="nav-harian-tab">@include('laporan.harian')</div>
        <div class="tab-pane fade" id="nav-mingguan" role="tabpanel" aria-labelledby="nav-mingguan-tab">@include('laporan.mingguan')</div>
        <div class="tab-pane fade" id="nav-bulanan" role="tabpanel" aria-labelledby="nav-bulanan-tab">@include('laporan.bulanan')</div>
        <div class="tab-pane fade" id="nav-tahunan" role="tabpanel" aria-labelledby="nav-tahunan-tab">@include('laporan.tahunan')</div>
    </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
