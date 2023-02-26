@section('title', 'Admin Panel | Workstation')
@include('main')
    <!-- START -->
<body class="cat__pages__login">
    <div class="cat__pages__login cat__pages__login--fullscreen" style="background-image: url(public/bna/bini/1.jpg)">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="mb-3">
                <br>
                    <strong><center><i>WELCOME TO BULE HORA UNIVERSITY FINANCE SYSTEM</i></center></strong>
                </h2>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href=" {{ url('/dashboard') }} ">Admin Home</a></li>
                            <li class="breadcrumb-item active">List of System Users</li>
                        </ol>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid ">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td><center><i>IdNo</i></center></td>
                                                <td><center><i>Name</i></center></td>
                                                <td><center><i>Email</i></center></td>
                                                <td><center><i>Action</i></center></td>
                                            </tr>
                                        </thead>
                        
                                         @foreach($userlist as $list)
                                        <tr>
                                            <td><center><i>{{ $list->id }}</i></center></td>
                                            <td><center><i>{{ $list->name }}</i></center></td>
                                            <td><center><i>{{ $list->email }}</i></center></td>
                                            <td> 
                                                <center>
                                                    <a href="  " class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"> <i class="fas fa-edit mr-2"></i>   Edit
                                                    </a>

                                                    <a href=" " class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal"> <i class="fas fa-power-off mr-2"></i>Deactivate
                                                    </a>
                                                    
                                                    <a href="  " class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editModal"> <i class="fas fa-trash mr-2"></i>   Delete
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                         @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!-- END: -->

<!-- START:scripts -->
<script>
    $(function() {

        // Change BG
        var min = 1, max = 5,
            next = Math.floor(Math.random()*max) + min,
            final = next > max ? min : next;
        $('.random-bg-image').data('img', final);
        $('.cat__pages__login').data('img', final).css('backgroundImage', 'url(public/bna/bini/' + final + '.jpg)');
    
    });
</script>
<!-- END: scripts -->
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>