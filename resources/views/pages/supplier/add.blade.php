@extends('dashboard')

@section('title', 'Add Supplier')

@section('content-header', 'Suppliers')

@section('sub-content-header', 'Add New Supplier')

@section('breadcrumb')
	<li>
		<a href="{{ route('home') }}">
			<i class="fa fa-dashboard"></i> Home
		</a>
	</li>
	<li>
		<a href="{{ route('supplier.index') }}">
			<i class="fa fa-align-center"></i> Suppliers
		</a>
	</li>
	<li class="active">Add Supplier</li>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-info">
					<div class="box-header"></div>
					{{ Form::open(array('route' => 'supplier.store', 'class' => 'form-horizontal')) }}
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