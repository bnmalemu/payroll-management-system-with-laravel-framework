@extends('layouts.perdiem.perdiem')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start add Payroll -->
    <div class="modal fade" id="add_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>የጉዞ መጠየቂያና መፍቀጃ ፎርም</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf  
            <div class="modal-body">
              <nav>
                <!-- /.card-header -->
                <h8><u><b><center>የጉዞ መጠየቂያና መፍቀጃ ፎርም</center></b></u></h8>
                <br>
                <ol type="1">
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Employee ID Number--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Employee Signature--"></li>
                  <li><input type="text" name="dept" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Directorate/College/school/Department/Office--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--ፕሮግራም--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--የውሎ አበል መጠን በየቀን ብር (ሲፈፀም)--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Description of the purpose--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Departure/መነሻ--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Destination/መድረሻ--"></li>
                  <li>Means of Travel /የትራንስፖር ሁኔታ</li> 
                  <input type="radio" name="travel" required/> 
                  <label>በአየር</label>
                  <input type="radio" name="travel" required/> 
                  <label>በቡሆዩመኪና</label>
                  <input type="radio" name="travel" required/> 
                  <label>በህዝብ ማመላለሻ</label>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--መስክ ጉዞው እስከ ደርሶ መልስ የተጠየቀ ቀን ብዛት--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--ሠራተኛው ከጉዞ የሚቆዩበት ጊዜ ከ--"></li>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--ሠራተኛው ከጉዞ የሚቆዩበት ጊዜ እስከ--"></li>
                  <label>የቅድመ ክፍያ (የተያያዘውን የጉዞ ዕቅድ ዝርዝር ይመልከቱ)</label>
                  <li><input type="text" name="name" class="form-control" autocomplete="off" style="border-radius: 50px;" required placeholder="--Destination/መድረሻ--"></li>

                  <li>ለመስክ ስራው እስከ ደርሶ  መልስ የተጠየቀ ቀን ብዛት<input type="text" name="num_date" class="form-control" autocomplete="off" style="border-radius: 50px;" required></li>  
                  <li>እኔ ስሜ ከላይ የተጠቀሰው የመስክ ተጓዥ ሠራተኛ ለሥራ የሚወስደዉን ገንዘብ ሥራው በተጠናቀቀ  በ7 ቀን ውስጥ ካላወራረድኩ ከወር ደሞዜ ላይ ተቀናሽ  ሆኖ እንዲመለስ ተስማምቼ ነው፡፡</li>
                  <li>የጠያቂው ሠራተኛ :</li>
                  <p> ስም: <input type="text" name="ded_name" class="form-control" autocomplete="off" style="border-radius: 50px;" required>ፊርማ:<input type="text" name="ded_sign" class="form-control" autocomplete="off" style="border-radius: 50px;" required> </p>
                </ol>
                <ul style="list-style-type:square;">
                  <li>በኃላፊዎች ብቻ የሚሞላ</li>
                  <li style="list-style-type:disc;">የተፈቀደ ቀን ብዛት<input type="text" name="date_num" class="form-control" autocomplete="off" style="border-radius: 50px;" required></li>
                  <li style="list-style-type:disc;">ለጉዞዉ ስለተጠየቀደዉ የዩኒቨርሲቲዉ መኪና ለስምርት ክፍል<input  type="text" name="perm_trav_in" class="form-control" autocomplete="off" style="border-radius: 50px;" required></li>
                  <li style="list-style-type:disc;">በአየር /በህዝብ ማመላለሻ መኪና ስለተጠየቀዉ ለሂሳብ ክፍል <input type="text" name="perm_trav_out" class="form-control" autocomplete="off" style="border-radius: 50px;" required></li>
                  </ul>
                <p>መስክ ጉዞውን ያዘዘ የሥራ ክፍል ኃላፊ:</p>
                <p> ስም: <input type="text" name="f_perm_name" class="form-control" autocomplete="off" style="border-radius: 50px;" required> ፊርማ:<input type="text" name="f_perm_sign" class="form-control" autocomplete="off" style="border-radius: 50px;" required></p>
                <p>መስክ ጉዞዉን ያፀደቀ የበላይ ኃላፊ:</p>
                <p> ስም: <input type="text" name="s_perm_name" class="form-control" autocomplete="off" style="border-radius: 50px;" required> ፊርማ:<input type="text" name="s_perm_sign" class="form-control" autocomplete="off" style="border-radius: 50px;" required></p>
                <p><u>የሥራ ድርሻ</u><input type="text" name="work_div" class="form-control" autocomplete="off" style="border-radius: 50px;" required></p>
                <div class="form-group">
                  <select name="request_to" class="form-control" style="border-radius: 50px;">
                    <option value="0" selected="true" disabled="true" required>--send request to--</option>
                    @foreach($users as $user)
                      <option value="{{$user->email}}"> {{$user->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="card-footer">
                  <center>
                    <div>In replaying, please quote our Ref. No.</div>
                    <div>መልስ ሲጽፉ የእኛን ቁጥር ይጥቀሱ</div>
                    <div>Tell- 046 443 0135   Fax- 046 443 0355</div>
                    <div>Post- 144</div>
                  </center>
                </div>
                <!-- /.card-footer -->
              </nav>
            </div>
            <div class="modal-footer">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Send Request</button>
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
        <div class="form-group float-sm-right">
          <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639; width: 180px;" data-toggle="modal" data-target="#add_payroll"><i class="fas fa-plus-circle mr-2"></i><i>መጠየቂያ ፎርም</i></button>
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