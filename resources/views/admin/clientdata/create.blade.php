@extends('layouts.adminlayout')
@section('title')
Add Client
@endsection

@section('content')


<link href="../plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
<link href="../plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Client</h4> 
					</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--.row-->

                <!--.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Client</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="/clientdata" class="form-horizontal" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Name</label>   
															<div class="col-md-9">
                                                            <input type="text" class="form-control" name="clientName" placeholder="John doe"></div>														
                                                    </div>
                                                </div>
												<!--/span-->
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email</label>   
															<div class="col-md-9">
                                                            <input type="email" class="form-control" name="clientEmail" placeholder="Johndoe@yahoo.com"></div>														
                                                    </div>
                                                </div>
                                                <!--/span-->
											</div>
                                            <!--/row-->
                                            
											<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control" readonly name="clientPassword" value="" placeholder="Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Contact Number</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="clientNumber" placeholder="Phone Number" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->		

                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Institutes</label>
                                                        
                                                        <div class="col-md-4">
                                                        <select class="select2 m-b-10 select2-multiple" name="courses[]" multiple="multiple" data-placeholder="Choose">
                                                        <optgroup label="Courses">
                                                             @isset($institutes)
                                                                @foreach($institutes as $institute)
                                                            <option value={{  $institute->id }}>{{ $institute->instituteName }}</option>
                                                            
                                                            @endforeach                                        
                                                            @endisset
                                                        </optgroup>
                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                            </div>								
                                           
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./row-->
            </div>
        </div>

        <script>
            $(document).ready(function(){                
                var text = "";
                var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*";
                for (var i = 0; i < 5; i++)
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                $('[name=clientPassword').attr('value', text);
            });        

             $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });    
        </script>
@endsection