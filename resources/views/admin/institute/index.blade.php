@extends('layouts.adminlayout')
@section('title')
Manage {{ $instituteCategory }}
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
			<form id="schoolForm">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage {{ $instituteCategory }}</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View {{ $instituteCategory }</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>School</th>
												<th>Suggested</th>
                                                <th>Upvotes</th>
												<th>isActive</th>
                                                <th>Information</th>
												<th>Update</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
												<td id="schoolId" value="">1</td>
                                                <td id="schoolName" value="">Abhijat vidhya vihar</td>
                                                <td id="schoolSuggestedCount" value="">43</td>
												<td id="schoolUpvotesCount" value="">39</td>
                                                <td id="isActive" value="">Yes</td>
												<td>
                                                    <button type="button" id="moreDetailClick" class="btn btn-info btn-rounded" onclick="moreSchoolDetail()">More Detail</button>																						
												</td>
												<td>
                                                    <button type="button" id="updateClick" class="btn btn-info btn-rounded" onclick="editSchoolDetail()"><i class="fa fa-edit fa-fw" ></i>update</button>												
												</td>
												<td>
													<button class="btn btn-block btn-danger btn-rounded" id="deleteClick">Delete</button>
												</td>
                                            </tr>																								
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
			<form>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>

@endsection