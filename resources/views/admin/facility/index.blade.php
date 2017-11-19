@extends('layouts.adminlayout')
@section('title')
Manage Location - State
@endsection
@section('content') 

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Extra</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Facilities</h3>
							
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Facility Name</th>
                                                <th>IsActive</th>
                                                <th>Action</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @isset($facilities)
                                                @foreach($facilities as $facility)
                                            <tr>
												<td id="facilityId" value="">{{ $facility->id }}</td>
                                                <td id="facilityName" value="">{{ $facility->facilityName }}</td>
                                                <td id="isActive" value="">{{ $facility->isActive }}</td>
                                                <td>
													<button class="btn btn-block btn-sm btn-info btn-rounded" data-toggle="modal" data-target="#updateFacility{{ $facility->id }}">
														<i class="fa fa-edit fa-fw"></i> Update
													</button>	
												</td>
                                                <td style="text-align:center;">
                                                        <button class="btn btn-block btn-sm btn-danger btn-rounded" onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $facility->id }}').submit();">
                                                                <i class="fa fa-remove fa-fw"></i> Delete
                                                        </button>
                                                        <form id="delete-form-{{ $facility->id }}" action="/facility/{{ $facility->id }}" method="POST" style="display: none;">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            {{ csrf_field() }}
                                                        </form>
                                                </td> 
                                            </tr>		

											<div id="updateFacility{{ $facility->id}}" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Update Facility</h4> </div>
                                                            
                                                            <form class="form-horizontal form-material" action="/facility/{{ $facility->id }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="PUT" />
                                                            <div class="modal-body">
                                                                
                                                                    <div class="form-group">
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" id="facilityId" disabled="true" value="{{ $facility->id }}"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="facilityName" value="{{ $facility->facilityName }}"> 
																		</div>																		
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow" name="isActive">
																				<option value="Null" disabled>IsActive</option>
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
                                                        </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                </div>
											 @endforeach
                                            @endisset
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#addFacility">Add Facility</button>
                                                </td>
												
                                                <div id="addFacility" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Add Facility</h4> </div>
                                                           <form class="form-horizontal form-material" action="/facility" method="post">
                                                            <div class="modal-body">
                                                                {{ csrf_field() }}
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="facilityName" placeholder="facilityName"> 
																		</div>
                                                                       <div class="col-md-12 m-b-20">
																	   		<select id="soflow" name="isActive">
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
                                                        </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        {{ $facilities->links() }}
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
            <!-- /.container-fluid -->
        </div>