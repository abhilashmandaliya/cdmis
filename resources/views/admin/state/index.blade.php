@extends('layouts.adminlayout')
@section('title')
Manage Location - State
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Location</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View State</h3>
							<h4  style="float:right;"><button class="btn btn-block btn-danger btn-rounded" id="deleteButton" style="display:inline-block" disabled="true" onclick="deleteConfirmation()">Delete</button></h4>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>State Name</th>
												<th>Country Name</th>
                                                <th>IsActive</th>
                                                <th>Action</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($states)
                                                @foreach($states as $state)
                                                    <tr>
                                                        <td id="stateId" value="">{{ $state->id }}</td>
                                                        <td id="stateName" value="">{{ $state->stateName }}</td>
                                                        <td id="countryName" value="">{{ $state->country->countryName }}</td>
                                                        <td id="isActive" value="">{{ $state->isVisible }}</td>
                                                        <td>
                                                            <button class="btn btn-block btn-sm btn-info btn-rounded" data-toggle="modal" data-target="#updateState">
                                                                <i class="fa fa-edit fa-fw"></i> Update
                                                            </button>	
                                                        </td>
                                                        <td style="text-align:center;"><input type="checkbox" id="deleteCheck" value="" onchange="deleteCheckFunction(this)"></td>
                                                    </tr>
                                                @endforeach
                                            @endisset
											<div id="updateState" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Update State</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" id="stateId" disabled="true" placeholder="stateId: 1"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" id="stateName" placeholder="Gujarat"> 
																		</div>
																		<div class="col-md-12 m-b-20">
                                                                            <select id="soflow">
																				<option value="">Choose Country</option>
                                                                                @isset($countries)
                                                                                    @foreach($countries as $country)
                                                                                        <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                                                                                    @endforeach
                                                                                @endisset
																			</select> 
																		</div
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow">
																				<option value="Null">IsActive</option>
																				<option value="yes" id="yes">Yes</option>
																				<option value="no" id="no">No</option>														  
																			</select> 
																		</div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Submit</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                </div>
											
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#addState">Add State</button>
                                                </td>
												
                                                <div id="addState" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Add State</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="StateName"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow">
																				<option value="">Choose Country</option>
                                                                                @isset($countries)
                                                                                    @foreach($countries as $country)
                                                                                        <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                                                                                    @endforeach
                                                                                @endisset
																			</select> 
																		</div>
                                                                       <div class="col-md-12 m-b-20">
																	   		<select id="soflow">
																				<option value="Null">IsActive</option>
																				<option value="yes" id="yes">Yes</option>
																				<option value="no" id="no">No</option>														  
																			</select> 
																	   </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Submit</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        {{ $states->links() }}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>										
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>

@endsection