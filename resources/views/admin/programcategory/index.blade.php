@extends('layouts.adminlayout')
@section('title')
Manage Program Category
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Program Category</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Program Category</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Program Category</th>
                                                <th>IsActive</th>
                                                <th>Action</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($programCategories)
                                                @foreach($programCategories as $programCategory)
                                                    <tr>
                                                        <td id="programCategoryId" value="">{{ $programCategory->id }}</td>
                                                        <td id="programCategoryName" value="">{{ $programCategory->programCategoryName }}r</td>
                                                        <td id="isActive" value="">{{ $programCategory->isVisible }}</td>
                                                        <td>
                                                            <button class="btn btn-block btn-sm btn-info btn-rounded" data-toggle="modal" data-target="#updateProgramCategory{{ $programCategory->id }}">
                                                                <i class="fa fa-edit fa-fw"></i> Update
                                                            </button>	
                                                        </td>
                                                        <td style="text-align:center;">
                                                        <button class="btn btn-block btn-sm btn-danger btn-rounded" onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $programCategory->id }}').submit();">
                                                                <i class="fa fa-remove fa-fw"></i> Delete
                                                        </button>
                                                            <form id="delete-form-{{ $programCategory->id }}" action="/programCategory/{{ $programCategory->id }}" method="POST" style="display: none;">
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </td>
                                                    </tr>	
                                                    <div id="updateProgramCategory{{ $programCategory->id }}" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <form class="form-horizontal form-material" action="/programCategory/{{ $programCategory->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="PUT" />
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Update Program Category</h4> </div>
                                                            <div class="modal-body">                                                                
                                                                    <div class="form-group">
																		<div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="id" disabled="true" placeholder="{{ $programCategory->id }}"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="programCategoryName" value="{{ $programCategory->programCategoryName }}" placeholder="Science">
																		</div>
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow" name="isVisible">
																				<option value="Null" selected disabled>IsActive</option>
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
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#addProgramCategory">Add Category</button>
                                                </td>
												
                                                <div id="addProgramCategory" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <form action="/programCategory" class="form-horizontal form-material" method="POST">
                                                        {{ csrf_field() }}    
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">Add Program Category</h4> </div>
                                                            <div class="modal-body">                                                                
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" name="programCategoryName" placeholder="Stream Category Name"> 
																		</div>
                                                                        <div class="col-md-12 m-b-20">
																			<select id="soflow" name="isVisible">
																				<option value="Null" selected disabled>IsActive</option>
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
                                                        {{ $programCategories->links() }}
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