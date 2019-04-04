@extends('dashboard')

@section('title', 'View Barang Masuks')

@section('content-header', 'Barang Masuk')
@section('sub-content-header', 'View All Barang Masuk')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('barangmasuk.index') }}">
			<i class="fa fa-align-center"></i> Barang Masuk
		</a>
	</li>
	<li class="active">View Barang Masuk</li>
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
						@if(count($barangMasuks) > 0)
							<table class="table table-bordered table-striped" id="table-type1">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Tgl Masuk</th>
										<th>Jumlah Masuk</th>
										<th>Supplier</th>
									</tr>
								</thead>
								<tbody>
									@foreach($barangMasuks as $barangmasuk)
										<tr>
											<td>{{ $barangmasuk->nama_barang }}</td>
											<td>{{ date('D, j F Y', strtotime($barangmasuk->tgl_masuk)) }}</td>
											<td>{{ $barangmasuk->jumlah_masuk }}</td>
											<td>
												@if($barangmasuk->supplier_id == null)
													No Supplier
												@else
													{{ $barangmasuk->supplier->nama }}
												@endif
											</td>
											<td>
												<div class="dropdown btn btn-default">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Action
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="{{ route('barangmasuk.edit', $barangmasuk->id) }}">Edit</a>
														</li>
														<li>
															{{ Form::open(['route' => ['barangmasuk.destroy', $barangmasuk->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Are you sure?");']) }}
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