@extends('main')
@section('title', '| All tags')
@section('navbar_title', 'tags')
@section('content')

<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Users <small class="badge">{{  App\User::count() }}</small></h3>
			</div>
			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
{{-- 					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-9">
				<div class="x_panel">
					
					<div class="x_content">

						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($tags as $tag)
								<tr>
									<th>{{ $tag->id }}</th>
									<td><a href="{{ route('tags.show', $tag->id) }}"> {{ $tag->name }}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-3">
			<div class="well">
				<form method="POST" action="{{ route('tags.store') }}">
					{{ csrf_field() }}
					<h2>New tag</h2>
					<label for="name">Name:</label>
					<input type="text" value="{{ old('name') }}" name="name" class="form-control">
					<input type="submit" value="add tag" class="btn btn-primary btn-block btn-h1-spacing">
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="{{ asset('admin-template/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin-template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ asset('admin-template/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin-template/vendors/nprogress/nprogress.js') }}"></script>
    <!-- icheck.js -->
    <script src="{{ asset('admin-template/vendors/iCheck/icheck.min.js') }}"></script>
    {{-- datatables --}}
    <script src="{{ asset('admin-template/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin-template/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('admin-template/build/js/custom.min.js') }}"></script>
@endsection

