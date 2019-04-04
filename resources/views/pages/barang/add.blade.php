@extends('dashboard')

@section('title', 'Add Barang')

@section('content-header', 'Barang')

@section('sub-content-header', 'Add Barang')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('barang.index') }}">
			<i class="fa fa-align-center"></i> Barang
		</a>
	</li>
	<li class="active">Add Barang</li>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-info">
					<div class="box-header"></div>
					{{ Form::open(array('route' => 'barangmasuk.store', 'class' => 'form-horizontal')) }}
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
									{{ Form::date('tgl_masuk', Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '', 'placeholder' => 'Tanggal Masuk')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('jumlah_masuk', 'Jumlah Masuk', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('jumlah_masuk', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Jumlah Masuk')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('id_supplier', 'Id Supplier', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									<select name="id_supplier" id="" class="form-control" required>
										@foreach($suppliers as $supplier)
											<option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
										@endforeach
									</select>
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