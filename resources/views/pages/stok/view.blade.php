@extends('dashboard')

@section('title', 'View Stok')

@section('content-header', 'Stok')
@section('sub-content-header', 'View All Stok')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('stok.index') }}">
			<i class="fa fa-align-center"></i> Stok
		</a>
	</li>
	<li class="active">View Stok</li>
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
						@if(count($barangs) > 0)
							<table class="table table-bordered table-striped" id="table-type1">
								<thead>
									<tr>
										<th>Id Barang</th>
										<th>Nama Barang</th>
										<th>Jumlah Masuk</th>
										<th>Jumlah Keluar</th>
										<th>Total Barang</th>
									</tr>
								</thead>
								<tbody>
									@foreach($barangs as $barang)
										<tr>
											<td>{{ $barang->id }}</td>
											<td>{{ $barang->nama_barang }}</td>
											<td>{{ $barang->jumlah_masuk }}</td>
											@foreach($keluars as $keluar)
												@if($keluar->barang_masuk_id == $barang->id)
													<td>{{ $keluar->jumlah_keluar }}</td>
													<td>{{ Helper::stok($barang->jumlah_masuk, $keluar->jumlah_keluar) }}</td>
												@else
													<td></td>
													<td>{{ Helper::stok($barang->jumlah_masuk, '0') }}</td>
												@endif
											@endforeach
											<!-- <td>
												<div class="dropdown btn btn-default">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Action
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="{{ route('barang.edit', $barang->id) }}">Edit</a>
														</li>
														<li>
															{{ Form::open(['route' => ['barang.destroy', $barang->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Are you sure?");']) }}
																{{ Form::submit('Delete', ['class' => 'delete-button-item']) }}
															{{ Form::close() }}
														</li>
													</ul>
												</div>
											</td> -->
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