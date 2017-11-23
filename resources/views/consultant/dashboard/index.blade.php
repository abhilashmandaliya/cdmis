@extends('layouts.adminlayout')

@section('title')

Search Institute

@endsection

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> 
                    </div>
                </div>
                <div class="row">
                 <div class="col-lg-8 col-lg-offset-2">
            <div class="input-group search-panel">               
                <input type="text" style='width:800px;' id="searchInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">                   
                <table style='background-color:#ffffff' id="searchTable">
                @isset($schools)
                    @foreach($schools as $school)

                         <tr><td onclick='event.preventDefault();document.getElementById("search_school_{{ $school->id }}").submit();'>
                            <span value="{{ $school->id }}">{{ $school->instituteName }}</span>
                                <form method='post' id='search_school_{{ $school->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='school'/>
                                    <input type='hidden' name='data' value='{{ $school->id }}' />
                                </form>
                        </td></tr>
                    @endforeach
                @endisset
                 @isset($colleges)
                    @foreach($colleges as $college)

                         <tr><td onclick='event.preventDefault();document.getElementById("search_college_{{ $college->id }}").submit();'>
                            <span value="{{ $college->id }}">{{ $college->instituteName }}</span>
                                <form method='post' id='search_college_{{ $college->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='college'/>
                                    <input type='hidden' name='data' value='{{ $college->id }}' />
                                </form>
                        </td></tr>
                    @endforeach
                @endisset                                  
                  @isset($private_institutes)
                    @foreach($private_institutes as $private_institute)

                          <tr><td onclick='event.preventDefault();document.getElementById("search_private_institute_{{ $private_institute->id }}").submit();'>
                            <span value="{{ $private_institute->id }}">{{ $private_institute->instituteName }}</span>
                                <form method='post' id='search_private_institute_{{ $private_institute->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='private_institute'/>
                                    <input type='hidden' name='data' value='{{ $private_institute->id }}' />
                                </form>
                        </td></tr>
                    @endforeach
                @endisset
                  @isset($programs)
                    @foreach($programs as $program)

                         <tr><td onclick='event.preventDefault();document.getElementById("search_program_{{ $program->id }}").submit();'>
                            <span value="{{ $program->id }}">{{ $program->programName }}</span>
                                <form method='post' id='search_program_{{ $program->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='program'/>
                                    <input type='hidden' name='data' value='{{ $program->id }}' />
                                </form>
                        </td></tr>
                    @endforeach
                @endisset
                @isset($courses)
                    @foreach($courses as $course)

                        <tr><td onclick='event.preventDefault();document.getElementById("search_course_{{ $course->id }}").submit();'>
                            <span value="{{ $course->id }}">{{ $course->courseName }}</span>
                                <form method='post' id='search_course_{{ $course->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='course'/>
                                    <input type='hidden' name='data' value='{{ $course->id }}' />
                                </form>
                        </td></tr>
                    @endforeach
                @endisset
                 @isset($cities)
                    @foreach($cities as $city)
                        <tr><td onclick='event.preventDefault();document.getElementById("search_city_{{ $city->id }}").submit();'>
                            <span value="{{ $city->id }}">{{ $city->cityName }}</span>
                                <form method='post' id='search_city_{{ $city->id }}' action='/institute/custom'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='search' value='city'/>
                                    <input type='hidden' name='data' value='{{ $city->id }}' />
                                </form>
                        </td></tr>
                    @endforeach                                        
                @endisset
                </table>
            </div>
        </div>
                </div>
                
                <!-- Change Password Modal -->
                
                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Change Password</h4> </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Old Password:</label>
                                                    <input type="password" class="form-control" id="oldPassword"> </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">New Password</label>
                                                    <input type="password" class="form-control" id="newPassword">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Confirm New Password</label>
                                                    <input type="password" class="form-control" id="confirmNewPassword">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                </div>              

                
            </div>
            <!-- /.container-fluid -->
            
            <!-- Footer Start -->
            <!-- Footer End -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Footer Script All Jquery -->

        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="/js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/js/custom.min.js"></script>
        <script src="../plugins/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="../plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="../plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>     <script type="text/javascript" src="../plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
        <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(document).ready(function(){
                $('#searchTable').hide();
                $('#searchInput').on('keypress',function(){
                    $('#searchTable').show();
                });
            });
        });
        </script>
        <!--Style Switcher -->
        <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>  
    <!-- End Footer Script -->  
    <style>
* {
  box-sizing: border-box;
}
#searchInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#searchTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
#searchTable th, #searchTable td {
  text-align: left;
  padding: 12px;
}
#searchTable tr {
  border-bottom: 1px solid #ddd;
}
#searchTable tr.header, #searchTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<script type="text/javascript">
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("searchTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection