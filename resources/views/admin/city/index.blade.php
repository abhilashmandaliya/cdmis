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
                                                <th>City Name</th>
												<th>State Name</th>
                                                <th>IsActive</th>
                                                <th>Action</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($cities)
                                                @foreach($cities as $city)
                                                    <tr>
                                                        <td id="cityId" value="">{{ $city->id }}</td>
                                                        <td id="cityName" value="">{{ $city->cityName }}</td>
                                                        <td id="stateName" value="">{{ $city->state->stateName }}</td>
                                                        <td id="isActive" value="">{{ $city->isVisible }}</td>
                                                        <td>
                                                            <button class="btn btn-block btn-sm btn-info btn-rounded" data-toggle="modal" data-target="#updateCity">
                                                                <i class="fa fa-edit fa-fw"></i> Update
                                                            </button>	
                                                        </td>
                                                        <td style="text-align:center;"><input type="checkbox" id="deleteCheck" value="" onchange="deleteCheckFunction(this)"></td>
                                                    </tr>		                                            
                                                @endforeach
                                            @endisset
											<div id="updateCity" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Update City</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" id="cityId" disabled="true" placeholder="cityId: 1"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" id="cityName" placeholder="Ahmedabad"> 
																		</div>
																		<div class="col-md-12 m-b-20">
                                                                            <select id="soflow">
                                                                                <option value="">Choose State</option>
                                                                                @isset($states)
                                                                                    @foreach($states as $state)
                                                                                        <option value="{{ $state->id }}">{{ $state->stateName }}</option>
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
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#addCity">Add City</button>
                                                </td>
												
                                                <div id="addCity" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Add City</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="cityName"> 
																		</div>
																		<div class="col-md-12 m-b-20">
																			<select id="soflow">
                                                                                <option value="">Choose State</option>
                                                                                @isset($states)
                                                                                    @foreach($states as $state)
                                                                                        <option value="{{ $state->id }}">{{ $state->stateName }}</option>
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
                                                        {{ $cities->links() }}
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
            </div>
        </div>

@endsection