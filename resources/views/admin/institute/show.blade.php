@extends('layouts.adminlayout')
@section('title')
View Institute
@endsection

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">More Institute Detail</h4> 
					</div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <img src="{{ $instituteDetail->logo_path }}" class="thumb-lg img-circle" alt="Logo Not Available">
                                        <h4 class="text-white">{{ $instituteDetail->instituteName }}</h4>
									</div>
                                </div>
                            </div>
                            <div class="user-btm-box" >
								<div class="col-md-12 col-sm-12 text-center ">
											<h3 style="text-align: center;">Upvotes {{ $instituteDetail->upVotes }}</h3>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="active tab">
                                    <a href="#basics" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Basic Detail</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#location" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Address</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#programs" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Program Detail</span> </a>
                                </li>
                                <li class="tab">
                                    <a href="#extra" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Extra</span> </a>
                                </li>
                            </ul>
							
                            <div class="tab-content">
                                <div class="tab-pane active" id="basics">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Institute Category</label>
                                            <div class="col-md-12">
												<h4>{{ $instituteDetail->categoryName }}</h4>
											</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Suggested To</label>
                                            <div class="col-md-12">
												<h4>{{ $instituteDetail->suggested }}</h4>
											</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Is Active</label>
                                            <div class="col-md-12">
												<h4>{{ $instituteDetail->isVisible == 1 ? "Yes" : "No" }}</h4>
											</div>
                                        </div>
                                    </form>
                                </div>
                                
								<div class="tab-pane" id="location">
									<form class="form-horizontal form-material">
                                        @isset($addresses)
                                            @foreach($addresses as $address)
                                                <div class="form-group">
                                                    <label class="col-md-12">City : {{ $address['cityName'] }}</label>
                                                    <div class="col-md-12">
                                                        <h4>Address:&nbsp; {{ $address['cityDetail']->address }}</h4>
                                                        <h4>Contact Number:&nbsp;  {{ $address['cityDetail']->contactNumber }}</h4>
                                                        <h4>Website Link: &nbsp; <a target="_blank" href="{{ $address['cityDetail']->websiteLink }}">{{ $address['cityDetail']->websiteLink }}</a></h4>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endisset
										<hr>	
                                    </form>																		   									
                                </div>
								
                                <div class="tab-pane" id="programs">
                                    @isset($programs)
                                        @foreach($programs as $program)
                                            <form class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <label class="col-md-12">Program : {{ $program['programName'] }}</label>
                                                    <div class="col-md-12">
                                                        <div class="col-md-2">
                                                            <h4>Board</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h4>{{ $program['boardName'] }}</h4>												
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-2">
                                                            <h4>Fees</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h4>{{ $program['programDetail']->programFees }}</h4>												
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-2">
                                                            <h4>Courses</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            @isset($program['courses'])
                                                                @foreach($program['courses'] as $course)
                                                                    <h4>{{ $course->courseName }}</h4>
                                                                @endforeach
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    
                                                    <hr>
                                                </div>																		
                                            </form>
                                        @endforeach
                                    @endisset
                                </div>
								
                                <div class="tab-pane" id="extra">
									<form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Facilites</label>
                                            <div class="col-md-11" style="float:right;">
                                                @isset($facilities)
                                                    @foreach($facilities as $facility)    
                                                        <h4>{{ $facility->facilityName }}</h4>
                                                    @endforeach
                                                @endisset
											</div>											
											<hr>
                                            <label class="col-md-12">Events</label>
                                            @isset($events)
                                                @foreach($events as $event)
                                                    <div class="col-md-11" style="float:right;">
                                                            <div class="col-md-5">
                                                                <h4>{{ $event->eventName }}</h4>													
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4>{{ $event->start_date_time }}</h4>
                                                            </div>
                                                    </div>
                                                @endforeach
                                            @endisset
                                        </div>																		
                                    </form>                                   
                                </div>
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

@endsection