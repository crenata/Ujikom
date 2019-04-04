@extends('dashboard')

@section('title', 'Add Barang Keluar')

@section('content-header', 'Barang Keluar')

@section('sub-content-header', 'Add Barang Keluar')

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
	<li class="active">Add Barang Keluar</li>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-info">
					<div class="box-header"></div>
					{{ Form::open(array('route' => 'barangkeluar.store', 'class' => 'form-horizontal')) }}
						<div class="box-body">
							<div class="form-group">
								{{ Form::label('barang_masuk_id', 'Barang', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									<select name="barang_masuk_id" id="" class="form-control" required>
										@foreach($barangs as $barang)
											<option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('tgl_keluar', 'Tgl Keluar', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::date('tgl_keluar', Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '', 'placeholder' => 'Tanggal Keluar')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('jumlah_keluar', 'Jumlah Keluar', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('jumlah_keluar', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Jumlah Keluar')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('lokasi', 'Lokasi', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('lokasi', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Lokasi')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('penerima', 'Penerima', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('penerima', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Penerima')) }}
								</div>
							</div>
						</div> <!-- .box-body -->

						<div class="box-footer">
							{{ Html::linkRoute('barangkeluar.index', 'Cancel', array(), ['class' => 'btn btn-warning']) }}
							{{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
							{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection