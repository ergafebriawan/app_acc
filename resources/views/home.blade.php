@extends('adminlte::page')

@section('title', 'Main Dashboard')

@section('content_header')
    <h1>Main Dashboard</h1>
@stop

@section('content')
<div class="row my-2">
    <div class="col-md-4">
        <x-adminlte-info-box title="Transaksi" text="Rp {{number_format(350000)}} / 45 transaksi" icon="fas fa-lg fa-cash-register text-primary" icon-theme="light" theme="primary"/>
    </div>
    <div class="col-md-4">
        <x-adminlte-info-box title="Transaksi Debit" text="Rp {{number_format(350000)}} / 45 transaksi" icon="fas fa-lg fa-credit-card text-secondary" icon-theme="light" theme="secondary"/>
    </div>
    <div class="col-md-4">
        <x-adminlte-info-box title="Transaksi Kredit" text="Rp {{number_format(350000)}} / 45 transaksi" icon="far fa-lg fa-credit-card text-teal" icon-theme="light" theme="teal"/>
    </div>
</div>
<div class="row my-2">
    <div class="col-md-4">
        <x-adminlte-info-box title="Pendapatan" text="Rp {{number_format(350000)}}" icon="fas fa-lg fa-sign-in-alt text-success" icon-theme="light" theme="success"/>
    </div>
    <div class="col-md-4">
        <x-adminlte-info-box title="Pengeluaran" text="Rp {{number_format(350000)}}" icon="fas fa-lg fa-sign-out-alt text-warning" icon-theme="light" theme="warning"/>
    </div>
    <div class="col-md-4">
        <x-adminlte-info-box title="User" text="Rp {{number_format(350000)}}" icon="fas fa-lg fa-user-friends text-dark" icon-theme="light" theme="dark"/>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <x-adminlte-card title="Transaksi" theme="info" icon="fas fa-lg fa-cash-register">
            <canvas id="transaksi-chart"></canvas>
        </x-adminlte-card>
    </div>
    <div class="col-md-6">
        <x-adminlte-card title="Pendapatan & Pengeluaran" theme="teal" icon="fas fa-lg fa-sign-in-alt">
            <canvas id="pendapatan-chart"></canvas>
        </x-adminlte-card>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        var transaksi = document.getElementById("transaksi-chart").getContext('2d');
		var Chart_transaksi = new Chart(transaksi, {
			type: 'line',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Agustus", "September", "Oktober", "November", "Desember"],
				datasets: [{
					label: 'Transaksi Debit',
					data: [12, 19, 3, 23, 2, 3, 8, 23, 33, 18, 20, 21],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)'
					],
					borderWidth: 1
				},
                {
                    label: 'Transaksi Kredit',
					data: [22, 11, 6, 20, 6, 11, 33, 24, 12, 20, 30, 19],
					backgroundColor: [
					'rgba(54, 162, 235, 0.2)'
					],
					borderColor: [
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
                }]
			},
			options: {
                responsive: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
        var pendapatan = document.getElementById("pendapatan-chart").getContext('2d');
		var Chart_pendapatan = new Chart(pendapatan, {
			type: 'line',
			data: {
				labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Agustus", "September", "Oktober", "November", "Desember"],
				datasets: [{
					label: 'Pengeluaran',
					data: [12, 19, 3, 23, 2, 3, 8, 23, 33, 18, 20, 21],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)'
					],
					borderWidth: 1
				},
                {
                    label: 'Pendapatan',
					data: [22, 11, 6, 20, 6, 11, 33, 24, 12, 20, 30, 19],
					backgroundColor: [
					'rgba(54, 162, 235, 0.2)'
					],
					borderColor: [
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
                }]
			},
			options: {
                responsive: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
    </script>
@stop