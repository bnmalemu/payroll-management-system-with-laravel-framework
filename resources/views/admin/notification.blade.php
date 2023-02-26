@extends('layouts.admin.admin')
@section('content')

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark"></h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href=" {{ url('/dashboard') }} ">Admin Home</a></li>
					<li class="breadcrumb-item active">Notification</li>
				</ol>
			</div>
		</div>
	</div>	
</div>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Notifications</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Notification 1">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Notification 2">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Recieve</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->

            </div>
        </div>
    </div>
</section>

@endsection