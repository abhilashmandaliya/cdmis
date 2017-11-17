@extends('layouts.adminlayout')
@section('title')
Add User
@endsection

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add User</h4> 
					</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--.row-->

                <!--.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Admin/Consultant</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="/user" class="form-horizontal" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Name</label>   
															<div class="col-md-9">
                                                            <input type="text" class="form-control" name="name" placeholder="John doe"></div>														
                                                    </div>
                                                </div>
												<!--/span-->
												<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email</label>   
															<div class="col-md-9">
                                                            <input type="email" class="form-control" name="email" placeholder="Johndoe@yahoo.com"></div>														
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
                                                            <input type="password" class="form-control" name="password" placeholder="Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
											
											<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">User Type</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="userTypeId">
                                                                <option selected disabled>Select User Type</option>
                                                                @isset($userTypes)
                                                                    @foreach($userTypes as $userType)
                                                                        <option value="{{ $userType->id }}">{{ $userType->typeName }}</option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
														</div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Branch name</label>
                                                        <div class="col-md-9">
															<select class="form-control" name="branchId">
                                                                <option selected disabled>Select Branch</option>
                                                                @isset($consultancyBranches)
                                                                    @foreach($consultancyBranches as $consultancyBranch)
                                                                        <option value="{{ $consultancyBranch->id }}">{{ $consultancyBranch->city->cityName }}</option>
                                                                    @endforeach
                                                                @endisset
                                                            </select>
														</div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                           
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
@endsection