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
                            <h3 class="box-title">View {{ $instituteCategory }}</h3>
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>{{ $instituteCategory }}</th>
												<th>Suggested</th>
                                                <th>Upvotes</th>
												<th>isActive</th>
                                                <th>Information</th>
												<th>Update</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($institutes)
                                                @foreach($institutes as $institute)
                                                    <tr>
                                                        <td id="schoolId" value="">{{ $institute->id }}</td>
                                                        <td id="schoolName" value="">{{ $institute->instituteName }}</td>
                                                        <td id="schoolSuggestedCount" value="">{{ $institute->suggested }}</td>
                                                        <td id="schoolUpvotesCount" value="">{{ $institute->upVotes }}</td>
                                                        <td id="isActive" value="">{{ $institute->isVisible }}</td>
                                                        <td>
                                                            <button type="button" id="moreDetailClick" class="btn btn-info btn-rounded" onclick="window.open('/institute/{{ $institute->id }}')">More Detail</button>
                                                        </td>
                                                        <td>
                                                            <button type="button" id="updateClick" class="btn btn-info btn-rounded" onclick="window.open('/institute/{{ $institute->id }}/edit')"><i class="fa fa-edit fa-fw" ></i>update</button>												
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-block btn-danger btn-rounded" id="deleteClick">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset																					
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
        </div>

@endsection