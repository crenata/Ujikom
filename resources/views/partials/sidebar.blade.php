<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('public/plugin/AdminLTE-2.4.5/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">

			<li class="treeview {{ Request::is('') ? 'active' : '' }}">
				<a href="{{ route('home') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-book"></i> <span>Documentation</span>
				</a>
			</li>

			<!-- <li class="treeview {{ Request::is('user') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-users"></i> <span>Users</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="#">
							<i class="fa fa-circle-o"></i> <span>Add User</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-circle-o"></i> <span>View Users</span>
						</a>
					</li>
				</ul>
			</li> -->

			<li class="treeview {{ Request::is('supplier', 'supplier/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-signal"></i> <span>Supplier</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('supplier.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Supplier</span>
						</a>
					</li>
					<li>
						<a href="{{ route('supplier.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Supplier</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="treeview {{ Request::is('barangmasuk', 'barangmasuk/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-bolt"></i> <span>Barang Masuk</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('barangmasuk.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Barang Masuk</span>
						</a>
					</li>
					<li>
						<a href="{{ route('barangmasuk.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Barang Masuk</span>
						</a>
					</li>
				</ul>
			</li>

			<!-- <li class="treeview {{ Request::is('barang', 'barang/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-align-center"></i> <span>Barang</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('barang.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Barang</span>
						</a>
					</li>
					<li>
						<a href="{{ route('barang.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Barang</span>
						</a>
					</li>
				</ul>
			</li> -->

			<li class="treeview {{ Request::is('barangkeluar', 'barangkeluar/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-paperclip"></i> <span>Barang Keluar</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('barangkeluar.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Barang Keluar</span>
						</a>
					</li>
					<li>
						<a href="{{ route('barangkeluar.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Barang Keluar</span>
						</a>
					</li>
				</ul>
			</li>

			<!-- <li class="treeview {{ Request::is('pinjambarang', 'pinjambarang/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-calendar"></i> <span>Pinjam Barang</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('pinjambarang.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Pinjam Barang</span>
						</a>
					</li>
					<li>
						<a href="{{ route('pinjambarang.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Pinjam Barang</span>
						</a>
					</li>
				</ul>
			</li> -->

			<li class="treeview {{ Request::is('stok', 'stok/create') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-suitcase"></i> <span>Stoks</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<!-- <li>
						<a href="{{ route('stok.create') }}">
							<i class="fa fa-circle-o"></i> <span>Add Stok</span>
						</a>
					</li> -->
					<li>
						<a href="{{ route('stok.index') }}">
							<i class="fa fa-circle-o"></i> <span>View Stoks</span>
						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					<i class="fa fa-sign-out"></i> <span>Sign Out</span>
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>

		</ul>
	</section> <!-- .sidebar -->
</aside>