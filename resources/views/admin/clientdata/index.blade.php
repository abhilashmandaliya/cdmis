@extends('layouts.adminlayout')
@section('title')
Manage Clients
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Client</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Client</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Number</th>
												<th>Account Creator</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
												<td id="clientId" value="">1</td>
                                                <td id="clientName" value="">Jasin</td>
                                                <td id="clientEmail" value="">js@gmail.com</td>
                                                <td id="clientNumber" value="">8901231390</td>
                                                <td id="clientAccountCreator" value="">samir@gmail.com</td>												
                                                <td>
                                                    <button type="button" class="btn btn-info btn-rounded">Send Email</button>												
												</td>                                             												
                                            </tr>
											<tr>
												<td id="clientId" value="">2</td>
                                                <td id="clientName" value="">Kanak</td>
                                                <td id="clientEmail" value="">kanak@gmail.com</td>
                                                <td id="clientNumber" value="">8901231390</td>
                                                <td id="clientAccountCreator" value="">samir@gmail.com</td>												
                                                <td>
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#moreInformation">More Detail</button>												
												</td>                                             												
                                            </tr>	
											
											<div id="moreInformation" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                                                                <h4 class="modal-title" id="myModalLabel">More Information</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
																				<h4> Suggested Institute </h4>
																					<ul>
																					  <li>NIRMA</li>
																					  <li>DAIICT</li>
																					  <li>IIT</li>
																					</ul>																				
																		</div>
																		<div class="col-md-12 m-b-20">
																				<h4> Upvoted Institute </h4>
																				<ul>
																					<li>IIT</li>
																				</ul>
																		</div>
                                                                    </div>
                                                                </from>
                                                            </div>                                                            
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>												
                                                    <!-- /.modal-dialog -->
                                            </div>
											
                                        </tbody>
                                        <tfoot>
                                            <tr>                                              
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
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