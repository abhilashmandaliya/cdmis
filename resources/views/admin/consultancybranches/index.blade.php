@extends('layouts.adminlayout')
@section('title')
Manage Consultancy Branches
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Consultancy Branch</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Consultancy Branches</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Branch Name</th>
												<th>Branch Address</th>
												<th>Branch City</th>
												<th>Contact Number</th>
                                                <th>IsActive</th>
                                                <th>Update</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($consultancyBranches)
                                                @foreach($consultancyBranches as $consultancyBranch)
                                            <tr>
												<td id="branchId" value="">{{ $consultancyBranch->id }}</td>
                                                <td id="branchName" value="">{{ $consultancyBranch->branchName }}</td>
												<td id="branchAddress" value="">{{ $consultancyBranch->branchAddress }}</td>
												<td id="branchCity" value="">{{ $consultancyBranch->city->cityName }}</td>
												<td id="contactNumber" value="">{{ $consultancyBranch->contactNumber }}</td>
                                                <td id="isActive" value="">{{ $consultancyBranch->isVisible }}</td>
                                                <td>
													<button class="btn btn-block btn-sm btn-info btn-rounded" data-toggle="modal" data-target="#updateConsultancyBranch{{ $consultancyBranch->id }}">
														<i class="fa fa-edit fa-fw"></i> Update
													</button>	
												</td>
                                                <td style="text-align:center;">
                                                        <button class="btn btn-block btn-sm btn-danger btn-rounded" onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $consultancyBranch->id }}').submit();">
                                                                <i class="fa fa-remove fa-fw"></i> Delete
                                                        </button>
                                                            <form id="delete-form-{{ $consultancyBranch->id }}" action="/consultancyBranch/{{ $consultancyBranch->id }}" method="POST" style="display: none;">
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </td>
                                            </tr>
                                            <div id="updateConsultancyBranch{{ $consultancyBranch->id }}" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <form class="form-horizontal form-material" action="/consultancyBranch/{{ $consultancyBranch->id }}" method="POST">        
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="PUT" />
                                                <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Update Consultancy Branch</h4> </div>
                                                            <div class="modal-body">                                                                
                                                                    <div class="form-group">
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="id" disabled="true" placeholder="{{ $consultancyBranch->id }}"> 
																		</div>
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="branchName" placeholder="Ahmedabad Branch" value="{{ $consultancyBranch->branchName }}"> 
																		</div>
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="branchAddress" placeholder="M-12 Patel Avenue, Thaltej" value="{{ $consultancyBranch->branchAddress }}"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow" name="branchCity">
																				<option value="Null" disabled selected>choose City</option>
                                                                                @isset($cities)
                                                                                    @foreach($cities as $city)
                                                                                        <option value="{{ $city->id }}">{{ $city->cityName }}</option>
                                                                                    @endforeach
                                                                                @endisset
																			</select> 
																		</div>
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="contactNumber" value="{{ $consultancyBranch->contactNumber }}" placeholder="079-123410"> 
																		</div>																		
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow" name="isVisible">
																				<option value="Null" disabled selected>IsActive</option>
																				<option value="1" id="yes">Yes</option>
																				<option value="0" id="no">No</option>														  
																			</select> 
																		</div>																		
                                                                    </div>                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info waves-effect">Submit</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                </form>
                                                </div>
                                                @endforeach
                                            @endisset									
											
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#addConsultancyBranch">Add Branch</button>
                                                </td>
												
                                                <div id="addConsultancyBranch" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <form class="form-horizontal form-material" action="/consultancyBranch" method="POST">    
                                                    {{ csrf_field() }}
                                                <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Add Consultancy Branch</h4>
															</div>
                                                            <div class="modal-body">                                                               
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="branchName" placeholder="C.G.Road Branch" /> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="branchAddress" placeholder="ABC street, Block no. 1"> 
																		</div>																		
																		<div class="col-md-12 m-b-20">
                                                                            <select id="soflow" name="branchCity">
																				<option value="Null" disabled selected>choose City</option>
                                                                                @isset($cities)
                                                                                    @foreach($cities as $city)
                                                                                        <option value="{{ $city->id }}">{{ $city->cityName }}</option>
                                                                                    @endforeach
                                                                                @endisset
																			</select>
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="contactNumber" placeholder="9876543210"> 
																		</div>																		
                                                                       <div class="col-md-12 m-b-20">
																	   		<select id="soflow" name="isVisible">
																				<option value="Null">IsActive</option>
																				<option value="1" id="yes">Yes</option>
																				<option value="0" id="no">No</option>														  
																			</select> 
																	   </div>																	    
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info waves-effect">Submit</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                    </form>
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        {{ $consultancyBranches->links() }}
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