@extends('dashboard')

@section('title', 'Edit Barang Masuk')

@section('content-header', 'Barang Masuk')

@section('sub-content-header', 'Edit Barang Masuk')

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
	<li class="active">Edit Barang Masuk</li>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<div class="box box-info">
					<div class="box-header"></div>
					{{ Form::model($barangMasuk, array('route' => ['barangmasuk.update', $barangMasuk->id], 'method' => 'PUT', 'class' => 'form-horizontal')) }}
						<div class="box-body">
							<div class="form-group">
								{{ Form::label('nama_barang', 'Nama Barang', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('nama_barang', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Nama Barang')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('tgl_masuk', 'Tgl Masuk', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('tgl_masuk', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Tgl Masuk')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('jumlah_masuk', 'Jumlah Masuk', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('jumlah_masuk', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Jumlah Masuk')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('supplier_id', 'Supplier', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::select('supplier_id', $suppliers, null, ['class' => 'form-control']) }}
								</div>
							</div>
						</div> <!-- .box-body -->

						<div class="box-footer">
							{{ Html::linkRoute('barangmasuk.index', 'Cancel', array(), ['class' => 'btn btn-warning']) }}
							{{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
							{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection