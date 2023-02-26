@extends('layouts.payroll.payroll')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start detail Employee -->
    <div class="modal fade" id="info_employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #55ACEE;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Details of Individual Employee</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" id="colls" name="coll" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--College--" required>
            </div>
            <div class="form-group">
              <input type="text" id="depts" name="depts" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Department--" required>
            </div>
            <div class="form-group">
              <input type="text" id="empids" name="empids" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Employee Id--" required>
            </div>
            <div class="form-group">
              <input type="text" id="fi_names" name="f_names" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Full Name--" required>
            </div>
            <div class="form-group">
              <input type="text" id="mi_names" name="m_names" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Full Name--" required>
            </div>
            <div class="form-group">
              <input type="text" id="la_names" name="l_names" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Last Name--" required>
            </div>
            <div class="form-group">
              <input type="text" id="accnos" name="accnos" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Account Number--" required>
            </div>
            <div class="form-group">
              <input type="text" id="bsalarys" name="bsalarys" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Basic Salary--" required>
            </div>
            <div class="form-group">
              <input type="text" id="ansalarys" name="ansalarys" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Annualized Salary--">
            </div>
            <div class="form-group">
              <input type="text" id="psalarys" name="psalarys" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Position Salary--" required>
            </div>
            <div class="form-group">
              <input type="text" id="hsalarys" name="hsalarys" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--House Salary--" required>
            </div>
            <div class="form-group">
              <input type="text" id="posalarys" name="posalarys" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="Enter Pocket Money" required>
            </div>
            <div class="form-group">
              <input type="text" id="mcards" name="mcards" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Mobile Card--" required>
            </div>
            <div class="form-group">
              <input type="text" id="transs" name="transs" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Transport--" required>
            </div>
            <div class="form-group">
              <input type="text" id="muyas" name="muyas" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Muyaa Salary--" required>
            </div>
            <div class="form-group">
              <input type="text" id="nontaxs" name="nontaxs" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Non-taxable--" required>
            </div>
            <div class="form-group">
              <input type="text" id="mmurtis" name="mmurtis" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Mana Murti--" required>
            </div>
            <div class="form-group">
              <input type="text" id="kitatss" name="kitatss" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Kitat--" required>
            </div>
            <div class="form-group">
              <input type="text" id="helpss" name="helpss" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--Help--" required>
            </div>
            <div class="form-group">
              <input type="text" id="ppdebs" name="ppdebs" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--PP Deb--" required>
            </div>
            <div class="form-group">
              <input type="text" id="pporos" name="pporos" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" placeholder="--PP Oro--" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
            <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End detail Employee -->
    <!-- Start add Employee -->
    <div class="modal fade" id="add_employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add Employee</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('employee')}}" method="POST">
            @csrf  
            <div class="modal-body">
              <!-- College -->
              <div class="form-group">
                <select name="c_code" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true">--college--</option>
                  @foreach($colls as $coll)
                    <option value="{{$coll->c_code}}"> {{$coll->c_name}}</option>
                  @endforeach        
                </select>
              </div>
              <!-- Department -->
              <div class="form-group">
                <select name="d_code" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true">--department--</option>
                  @foreach($depts as $dept)
                    <option value="{{$dept->d_code}}"> {{$dept->d_name}}</option>
                  @endforeach        
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="id_no" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Employee Id--" required>
              </div>
              <div class="form-group">
                <input type="text" name="f_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--First Name--" required>
              </div>
              <div class="form-group">
                <input type="text" name="m_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Middle Name--" required>
              </div>
              <div class="form-group">
                <input type="text" name="l_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Last Name--" required>
              </div>
              <div class="form-group">
                <input type="text" name="acc_no" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Account Number--" required>
              </div>
              <div class="form-group">
                <input type="text" name="b_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Basic Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" name="an_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Annualized Salary--">
              </div>
              <div class="form-group">
                <input type="text" name="pos_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Position Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" name="hou_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--House Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" name="poc_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="Enter Pocket Money" required>
              </div>
              <div class="form-group">
                <input type="text" name="mob_card" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Mobile Card--" required>
              </div>
              <div class="form-group">
                <input type="text" name="transp" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Transport--" required>
              </div>
              <div class="form-group">
                <input type="text" name="muy_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Muyaa Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" name="non_tax" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Non-taxable--" required>
              </div>
              <div class="form-group">
                <input type="text" name="ma_murti" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Mana Murti--" required>
              </div>
              <div class="form-group">
                <input type="text" name="kitat" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Kitat--" required>
              </div>
              <div class="form-group">
                <input type="text" name="help" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Help--" required>
              </div>
              <div class="form-group">
                <input type="text" name="pp_deb" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--PP Deb--" required>
              </div>
              <div class="form-group">
                <input type="text" name="pp_oro" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--PP Oro--" required>
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
    <!-- End add Employee -->
    <!-- Start edit Employee -->
    <div class="modal fade" id="edit_employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #55ACEE;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Edit and Update Employee</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('update_employee')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit_id" name="edit_id">  
            <div class="modal-body">
              <div class="form-group">
                <select id="coll" name="coll" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true">--college--</option>
                  @foreach($colls as $coll)
                    <option value="{{$coll->c_code}}"> {{$coll->c_name}}</option>
                  @endforeach        
                </select>
              </div>
              <div class="form-group">
                <select id="dept" name="dept" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true">--department--</option>
                  @foreach($depts as $dept)
                    <option value="{{$dept->d_code}}"> {{$dept->d_name}}</option>
                  @endforeach        
                </select>
              </div>
              <div class="form-group">
                <input type="text" id="empid" name="empid" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Employee Id--" required>
              </div>
              <div class="form-group">
                <input type="text" id="fi_name" name="fi_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Full Name--" required>
              </div>
              <div class="form-group">
                <input type="text" id="mi_name" name="mi_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Full Name--" required>
              </div>
              <div class="form-group">
                <input type="text" id="la_name" name="la_name" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Last Name--" required>
              </div>
              <div class="form-group">
                <input type="text" id="accno" name="accno" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Account Number--" required>
              </div>
              <div class="form-group">
                <input type="text" id="bsalary" name="bsalary" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Basic Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" id="ansalary" name="ansalary" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Annualized Salary--">
              </div>
              <div class="form-group">
                <input type="text" id="psalary" name="psalary" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Position Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" id="hsalary" name="hsalary" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--House Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" id="posalary" name="posalary" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="Enter Pocket Money" required>
              </div>
              <div class="form-group">
                <input type="text" id="mcard" name="mcard" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Mobile Card--" required>
              </div>
              <div class="form-group">
                <input type="text" id="trans" name="trans" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Transport--" required>
              </div>
              <div class="form-group">
                <input type="text" id="muya" name="muya" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Muyaa Salary--" required>
              </div>
              <div class="form-group">
                <input type="text" id="nontax" name="nontax" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Non-taxable--" required>
              </div>
              <div class="form-group">
                <input type="text" id="mmurti" name="mmurti" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Mana Murti--" required>
              </div>
              <div class="form-group">
                <input type="text" id="kitats" name="kitats" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Kitat--" required>
              </div>
              <div class="form-group">
                <input type="text" id="helps" name="helps" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--Help--" required>
              </div>
              <div class="form-group">
                <input type="text" id="ppdeb" name="ppdeb" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--PP Deb--" required>
              </div>
              <div class="form-group">
                <input type="text" id="pporo" name="pporo" class="form-control" autocomplete="off" style="border-radius: 50px;" placeholder="--PP Oro--" required>
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
    <!-- End edit Employee -->
    <!-- Start deactivate Employee -->
    <div class="modal fade" id="deactive_employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 50px;background-color: #4285F4;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Deactivate Employee</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('deactivate_employee')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="deactive_id" name="deactive_id">
            <input type="hidden" value="0" name="de_active">
            <div class="modal-body" style="background-color: #34A853;">
              <div class="form-group">
                <h8><center><i>Add Decription</i></center></h8>
                <input class="form-control" type="text" name="emp_reason" style="border-radius: 50px;" autocomplete="off" required placeholder="Please Add any Description for Deactivating!">
              </div>
              <div class="form-control" style="border-radius: 50px;">
                <h8><center><i>Are you sure to Deactivate?</i></center></h8>
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
    <!-- End of deactivate Employee -->
    <!-- Start of reactivate Employee -->
    <div class="modal fade" id="reactive_employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 50px;background-color: #4285F4;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Reactivate Employee</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('reactivate_employee')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="reactive_id" name="reactive_id">
            <input type="hidden" value="1" name="re_active">
            <div class="modal-body" style="background-color: #34A853;">
              <div class="form-group">
                <h8><center><i>Reason for Deactivation</i></center></h8>
                <input class="form-control" style="border-radius: 50px;" type="text" id="emp_reason" readonly="readonly" />
              </div>
              <br>
              <div class="form-control" style="border-radius: 50px;">
                <h8><center><i>Do you want to Reactivate?</i></center></h8>
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
    <!-- End of reactivate Employee -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
        <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_employee"><i class="fas fa-plus-circle mr-2"></i><i>New Employee</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td><b><center><i>College</i></center></b></td>
            <td><b><center><i>Department</i></center></b></td>
            <td><b><center><i>Emp IdNo</i></center></b></td>
            <td><b><center><i>First Name</i></center></b></td>
            <td><b><center><i>Middle Name</i></center></b></td>
            <td><b><center><i>Last Name</i></center></b></td>
            <td><b><center><i>Account Number</i></center></b></td>
            <td><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($employees) && $employees->count())
            @foreach($employees as $employee)
              <tr>
                <td bgcolor="#34A853"><i>{{$employee->c_name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$employee->d_name}}</i></td>
                <td bgcolor="#34A853"><i>{{$employee->id_no}}</i></td>
                <td bgcolor="#A4C639"><i>{{$employee->f_name}}</i></td>
                <td bgcolor="#34A853"><i>{{$employee->m_name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$employee->l_name}}</i></td>
                <td bgcolor="#34A853"><i>{{$employee->acc_no}}</i></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="{{$employee->id}}" class="info_button fas fa-info-circle" style="border-radius: 50px; background-color: #4285F4;"></button>
                    @if($employee->status == 1)
                      <button type="button" value="{{$employee->id}}" class="edit_button fas fa-edit" style="border-radius: 50px; background-color: #4285F4;"></button>
                      <button type="button" value="{{$employee->id}}" class="deactive_button fas fa-trash" style="border-radius: 50px; background-color: #4285F4;"></button>
                    @else
                      <button type="button" value="{{$employee->id}}" class="reactive_button fas fa-eye" style="border-radius: 50px; background-color: #4285F4;"></button>
                    @endif
                  </center>
                </td>
              </tr>
            @endforeach
          @endif
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
      $(document).on('click', '.info_button', function()
      {
        var employee_id = $(this).val();
        //alert(employee_id);
        $('#info_employee').modal('show');
        $.ajax({
          type: 'GET',
          url: 'info_employee/'+employee_id,
          dataType: 'json',
          success: function(response)
          {
            $('#colls').val(response.employee.c_name);
            $('#depts').val(response.employee.d_name);
            $('#empids').val(response.employee.id_no);
            $('#fi_names').val(response.employee.f_name);
            $('#mi_names').val(response.employee.m_name);
            $('#la_names').val(response.employee.l_name);
            $('#accnos').val(response.employee.acc_no);
            $('#bsalarys').val(response.employee.b_sala);
            $('#ansalarys').val(response.employee.an_sala);
            $('#psalarys').val(response.employee.pos_sala);
            $('#hsalarys').val(response.employee.hou_sala);
            $('#posalarys').val(response.employee.poc_sala);
            $('#mcards').val(response.employee.mob_card);
            $('#transs').val(response.employee.transp);
            $('#muyas').val(response.employee.muy_sala);
            $('#nontaxs').val(response.employee.non_tax);
            $('#mmurtis').val(response.employee.ma_murti);
            $('#kitatss').val(response.employee.kitat);
            $('#helpss').val(response.employee.help);
            $('#ppdebs').val(response.employee.pp_deb);
            $('#pporos').val(response.employee.pp_oro);
          }
        }); 
      }); 
    });
 
  </script>
  <script>
  
    $(document).ready(function()
    {
      $(document).on('click', '.edit_button', function()
      {
        var employee_id = $(this).val();
        //alert(employee_id);
        $('#edit_employee').modal('show');
        $.ajax({
          type: 'GET',
          url: 'edit_employee/'+employee_id,
          dataType: 'json',
          success: function(response)
          {
            $('#coll').val(response.employee.c_code);
            $('#dept').val(response.employee.d_code);
            $('#empid').val(response.employee.id_no);
            $('#fi_name').val(response.employee.f_name);
            $('#mi_name').val(response.employee.m_name);
            $('#la_name').val(response.employee.l_name);
            $('#accno').val(response.employee.acc_no);
            $('#bsalary').val(response.employee.b_sala);
            $('#ansalary').val(response.employee.an_sala);
            $('#psalary').val(response.employee.pos_sala);
            $('#hsalary').val(response.employee.hou_sala);
            $('#posalary').val(response.employee.poc_sala);
            $('#mcard').val(response.employee.mob_card);
            $('#trans').val(response.employee.transp);
            $('#muya').val(response.employee.muy_sala);
            $('#nontax').val(response.employee.non_tax);
            $('#mmurti').val(response.employee.ma_murti);
            $('#kitats').val(response.employee.kitat);
            $('#helps').val(response.employee.help);
            $('#ppdeb').val(response.employee.pp_deb);
            $('#pporo').val(response.employee.pp_oro);
            $('#edit_id').val(response.employee.id);
          }
        });
      });
    });
  
  </script>
  <script>
  
    $(document).ready(function()
    {
      $(document).on('click', '.deactive_button', function()
      {
        var employee_id = $(this).val();
        //alert(employee_id);
        $('#deactive_employee').modal('show');
        $.ajax({
          type: 'GET',
          url: 'deactive_employee/'+employee_id,
          dataType: 'json',
          success: function(response)
          {
            $('#deactive_id').val(response.employee.id);
          }
        });
      });
    });
  
  </script>
  <script>
  
    $(document).ready(function()
    {
      $(document).on('click', '.reactive_button', function()
      {
        var employee_id = $(this).val();
        //alert(employee_id);
        $('#reactive_employee').modal('show');
        $.ajax({
          type: 'GET',
          url: 'reactive_employee/'+employee_id,
          dataType: 'json',
          success: function(response)
          {
            $('#emp_reason').val(response.employee.reason);
            $('#reactive_id').val(response.employee.id);
          }
        });
      });
    });
  
  </script>
@endsection