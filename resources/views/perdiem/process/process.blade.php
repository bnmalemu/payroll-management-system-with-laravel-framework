@extends('layouts.perdiem.perdiem')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start add Payroll -->
    <div class="modal fade" id="add_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add Monthly Payroll</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf  
            <div class="modal-body">
              <div class="form-group">
                <input type="month" id="start_month" name="start_month" min="2023-01" class="form-control" autocomplete="off" style="border-radius: 50px;" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End add Payroll -->
    <!-- Start calculate Payroll -->
    <div class="modal fade" id="cal_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #55ACEE;">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLongTitle"><i>Are you sure to calculate monthly payroll?</i></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <input type="hidden" id="cur_id" name="cur_id">  
            <input type="hidden" id="cur_month" name="cur_month">  
            <div class="modal-footer">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">No</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Yes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End calculate Payroll -->
    <!-- Start edit Payroll -->
    <div class="modal fade" id="edit_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #55ACEE;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Edit and Update Payroll</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit_id" name="edit_id">  
            <div class="modal-body">
              <div class="form-group">
                <input type="month" id="edit_month" name="edit_month" min="2023-01" class="form-control" autocomplete="off" style="border-radius: 50px;" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End edit Payroll -->
    <!-- Start delete Payroll -->
    <div class="modal fade" id="delete_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 50px;background-color: #4285F4;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Delete Payroll</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <input type="hidden" id="delete_id" name="delete_id">
            <div class="modal-body" style="background-color: #34A853;">
              <div class="form-control" style="border-radius: 50px;">
                <h8><center><i>Are you sure to Delete?</i></center></h8>
              </div>
            </div>
            <div class="modal-footer" style="background-color: #A4C639;">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">No</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Yes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of delete Payroll -->
    <!-- Search filter -->
    <form action="" method="POST">
      @csrf
      <div class="row filter-row">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group float-sm-right">
          <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639; width: 140px;" data-toggle="modal" data-target="#add_payroll"><i class="fas fa-plus-circle mr-2"></i><i>Add Payroll</i></button>
        </div>
      </div>
    </form>
    <div class="card-body col-12">
      <table id="bini1" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td><b><center><i>Payement Month</i></center></b></td>
            <td><b><center><i>Payment Status</i></center></b></td>
            <td><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td bgcolor="#34A853"><center><i></i></center></td>
                <td bgcolor="#A4C639"><center><i></i></center></td>
                <td bgcolor="#34A853">
                  <center>
                      <button type="button" value="" class="cal_button" style="border-radius: 50px; background-color: #4285F4; width: 110px;"><center><i>Calculate</i></center></button>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" value="" class="edit_button fas fa-edit" style="border-radius: 50px; background-color: #4285F4; width: 40px;"></button>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button style="border-radius: 50px; background-color: #4285F4; width: 130px;"><center><i>Success</i></center></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" value="" class="delete_button fas fa-trash" style="border-radius: 50px; background-color: #4285F4; width: 40px;"></button>
                  </center>
                </td>
              </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </section>
  <!-- /.content -->
@endsection

@section('scripts')
  <script>
    $(document).ready(function()
    {
      $(document).on('click', '.cal_button', function()
      {
        var payroll_id = $(this).val();
        //alert(payroll_id);
        $('#cal_payroll').modal('show');
/*
        $.ajax({
          type: 'GET',
          url: 'load_payroll/'+payroll_id,
          dataType: 'json',
          success: function(response)
          {
            //console.log(response.payroll.payroll_month);
            $('#cur_id').val(response.payroll.id);
            $('#cur_month').val(response.payroll.payroll_month);
          }
        }); */
      });
    });
  </script>
  <script>
    $(document).ready(function()
    {
      $(document).on('click', '.edit_button', function()
      {
        var payroll_id = $(this).val();
        //alert(payroll_id);
        $('#edit_payroll').modal('show');
/*
        $.ajax({
          type: 'GET',
          url: 'edit_payroll/'+payroll_id,
          dataType: 'json',
          success: function(response)
          {
            //console.log(response.payroll.payroll_status);
            $('#edit_month').val(response.payroll.payroll_month);
            $('#edit_id').val(response.payroll.id);
          }
        }); */
      });
    });
  </script>
  <script>
    $(document).ready(function()
    {
      $(document).on('click', '.delete_button', function()
      {
        var payroll_id = $(this).val();
        //alert(payroll_id);
        $('#delete_payroll').modal('show');
/*
        $.ajax({
          type: 'GET',
          url: 'delete_payroll/'+payroll_id,
          dataType: 'json',
          success: function(response)
          {
            //console.log(response.payroll.payroll_month);
            $('#delete_id').val(response.payroll.id);
          }
        }); */
      });
    });
  </script>
@endsection