@extends('dashboard')

@section('title', 'View Barang Keluar')

@section('content-header', 'Barang Keluar')
@section('sub-content-header', 'View All Barang Keluar')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('barangkeluar.index') }}">
			<i class="fa fa-align-center"></i> Barang Keluar
		</a>
	</li>
	<li class="active">View Barang Keluar</li>
@endsection

@section('stylesheets')
	<style type="text/css">
		.delete-button-item {
			font-family: inherit;
			font-size: inherit;
			box-sizing: none;
			background-color: transparent;
			width: 100%;
			text-align: left;
			border: none;
			opacity: 0.8;
			outline: none;
			background: none;
			cursor: pointer;
			padding: 2px 0 2px 20px;
		}
		.delete-button-item:hover {
			/*background-color: #E1E3E9;*/
			background-color: red;
			color: black;
			opacity: 0.9;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-11">
				<div class="box">
					<div class="box-body">
						@if(count($barangKeluars) > 0)
							<table class="table table-bordered table-striped" id="table-type1">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Tgl Keluar</th>
										<th>Jumlah Keluar</th>
										<th>Lokasi</th>
										<th>Penerima</th>
									</tr>
								</thead>
								<tbody>
									@foreach($barangKeluars as $barangkeluar)
										<tr>
											<td>{{ $barangkeluar->barang_masuk->nama_barang }}</td>
											<td>{{ date('D, j F Y', strtotime($barangkeluar->tgl_keluar)) }}</td>
											<td>{{ $barangkeluar->jumlah_keluar }}</td>
											<td>{{ $barangkeluar->lokasi }}</td>
											<td>{{ $barangkeluar->penerima }}</td>
											<td>
												<div class="dropdown btn btn-default">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Action
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="{{ route('barangkeluar.edit', $barangkeluar->id) }}">Edit</a>
														</li>
														<li>
															{{ Form::open(['route' => ['barangkeluar.destroy', $barangkeluar->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Are you sure?");']) }}
																{{ Form::submit('Delete', ['class' => 'delete-button-item']) }}
															{{ Form::close() }}
														</li>
													</ul>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							<h3 class="no-result">No results found</h3>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection