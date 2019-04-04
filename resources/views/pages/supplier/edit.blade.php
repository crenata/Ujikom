@extends('dashboard')

@section('title', 'Edit Supplier')

@section('content-header', 'Supplier')

@section('sub-content-header', 'Edit Supplier')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('supplier.index') }}">
			<i class="fa fa-align-center"></i> Supplier
		</a>
	</li>
	<li class="active">Edit Supplier</li>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<div class="box box-info">
					<div class="box-header"></div>
					{{ Form::model($supplier, array('route' => ['supplier.update', $supplier->id], 'method' => 'PUT', 'class' => 'form-horizontal')) }}
						<div class="box-body">
							<div class="form-group">
								{{ Form::label('nama', 'Nama', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('nama', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Supplier Name')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('alamat', 'Alamat', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('alamat', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Alamat Supplier')) }}
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('telp', 'Telp', array('class' => 'col-sm-2 control-label')) }}
								<div class="col-sm-9">
									{{ Form::text('telp', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Telp Supplier')) }}
								</div>
							</div>
						</div> <!-- .box-body -->

						<div class="box-footer">
							{{ Html::linkRoute('supplier.index', 'Cancel', array(), ['class' => 'btn btn-warning']) }}
							{{ Form::reset('Reset', array('class' => 'btn btn-danger')) }}
							{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection