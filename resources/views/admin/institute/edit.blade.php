@extends('layouts.adminlayout')
@section('title')
Update Institute
@endsection

@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Edit Institute Detail</h4>
			</div>
		</div>
		<!-- /.row -->
		<!-- .row -->
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="white-box">
					<div class="user-bg">
						<img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
						<div class="overlay-box">
							<div class="user-content">
								<img src="{{ $instituteDetail->logo_path }}" class="thumb-lg img-circle" alt="Logo Not Available">
								<h4 class="text-white">{{ $instituteDetail->instituteName }}</h4>
							</div>
						</div>
					</div>
					<div class="user-btm-box" >
                        <form action="/institute/{{ $instituteDetail->id }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="hidden" name="section" value="logo_update"/>
                            <div class="col-md-12 col-sm-12 text-center ">
                                <input type="file" accept="image/*" class="form-control form-control-line" id="profilePic" name="logo_path">
                            </div>
                            <div style="margin-top:10px" class="col-md-12 col-sm-12 text-center">
                                <button type="submit" class="btn btn-info">Update Logo</button>
                            </div>
                        </form>
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
                        <form action="/institute/{{ $instituteDetail->id }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="hidden" name="section" value="basic_detail_update"/>
								<div class="form-group">
									<label class="col-md-12">Institute Category</label>
									<div class="col-md-12">
										<select id="soflow" name="categoryId">
											<option value="NULL" disblaed selected> Select Institute Category </option>
											@isset($instituteCategories)
											    @foreach($instituteCategories as $instituteCategory)
											        <option value="{{ $instituteCategory->id }}" @if($instituteCategory->id == $instituteDetail->categoryId) selected @endif>{{ $instituteCategory->categoryName }}</option>
											    @endforeach
											@endisset
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">College Name</label>
									<div class="col-md-12">
										<input type="text" name="instituteName" value="{{ $instituteDetail->instituteName }}" placeholder="{{ $instituteDetail->instituteName }}" class="form-control form-control-line"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">isActive</label>
									<div class="col-md-5" style="float:left">
										<select name="isVisible" class="form-control select2">
										    <option value="1" @if($instituteDetail->isVisible == 1) selected @endif>Yes</option>
										    <option value="0" @if($instituteDetail->isVisible == 0) selected @endif>No</option>
										</select>											
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="col-md-5" style="float:right;">
											<button type="submit" id="saveProgramDetails" class="btn btn-success btn-rounded">Save Changes</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="location">
                            @isset($addresses)
                                @foreach($addresses as $address)
                                    <form action="/institute/{{ $instituteDetail->id }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT" />
                                        <input type="hidden" name="section" value="address_update"/>
                                        <input type="hidden" name="addressId" value="{{ $address['cityDetail']->id }}" />
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h4>City</h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select id="soflow" name="cityId">
                                                            <option selected disabled>Select Institute City</option>
                                                            @isset($cities)
                                                                @foreach($cities as $city)
                                                                    <option value="{{ $city->id }}" @if($address['cityDetail']->cityId == $city->id) selected @endif>{{ $city->cityName }}</option>
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h4>Address</h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="address" name="address" placeholder="{{ $address['cityDetail']->address }}" value="{{ $address['cityDetail']->address }}" class="form-control form-control-line">													
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h4>Contact Number</h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="contactNumber" id="contactNumber" placeholder="{{ $address['cityDetail']->contactNumber }}" value="{{ $address['cityDetail']->contactNumber }}" class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h4>Website Link</h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="websiteLink" name="websiteLink" value="{{ $address['cityDetail']->websiteLink }}" placeholder="{{ $address['cityDetail']->websiteLink }}" class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h4>Is Active</h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select id="soflow" name="isVisible">
                                                            <option value="NULL" selected disabled>Is Active</option>
                                                            <option value="1" @if($address['cityDetail']->isVisible == 1) selected @endif>Yes</option>
                                                            <option value="0" @if($address['cityDetail']->isVisible == 0) selected @endif>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="col-md-5" style="float:right;">
                                                        <button type="submit" id="saveLocation" class="btn btn-success btn-rounded">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                @endforeach
                            @endisset
						</div>
						<div class="tab-pane" id="programs">
                        @isset($programs)
                            @foreach($programs as $program)
                            <form action="/institute/{{ $instituteDetail->id }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT" />
                                <input type="hidden" name="section" value="program_detail_update"/>
                                <input type="hidden" name="instituteProgramId" value="{{ $program['programDetail']->id }}"/>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <h4>Program</h4>
                                            </div>
                                            <div class="col-md-10">
                                                <select id="soflow" name="programId">
                                                    <option disabled selected value="NULL">Select a Program</option>
                                                    @isset($programList)
                                                        @foreach($programList as $_program)
                                                            <option value="{{ $_program->id }}" @if($_program->id == $program['programDetail']->id) selected @endif>{{ $_program->programName }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <h4>Board</h4>
                                            </div>
                                            <div class="col-md-10">
                                                <select id="soflow" name="boardId">
                                                    <option disabled selected value="NULL">Select a Board</option>
                                                    @isset($boardList)
                                                        @foreach($boardList as $board)
                                                            <option value="{{ $board->id }}" @if($board->id == $program['programDetail']->boardId) selected @endif >{{ $board->boardName }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <h4>Fees</h4>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" id="programFees" name="programFees" placeholder="{{ $program['programDetail']->programFees }}" value="{{ $program['programDetail']->programFees }}" class="form-control form-control-line">												
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <h4>Program Link</h4>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" id="programLink" name="programLink" placeholder="{{ $program['programDetail']->programFees }}" value="{{ $program['programDetail']->programLink }}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <h4>Courses</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="coursesChosen[]" class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose">
                                                    @isset($program['courses'])
                                                        @foreach($program['courses'] as $course)
                                                            <option value="{{ $course->courseId }}" selected>{{ $course->courseName }}</option>
                                                        @endforeach
                                                    @endisset
                                                    @isset($program['coursesNotTaken'])
                                                        @foreach($program['coursesNotTaken'] as $course)
                                                            <option value="{{ $course->id }}">{{ $course->courseName }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-5" style="float:right;">
                                                <button type="submit" id="saveProgramDetails" class="btn btn-success btn-rounded">Save Changes</button>
                                            </div>
                                        </div>
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
										<select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose">
											<optgroup label="Facilites">
												<option value="Hostel">Hostel</option>
												<option value="Library">Library</option>
												<option value="College Bus">College Bus</option>
											</optgroup>
										</select>
									</div>
									<hr>
									<label class="col-md-12">Events</label>
									<div class="col-md-11" style="float:right;">
										<select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose">
											<optgroup label="Events">
												<option value="YR">Youth Run</option>
												<option value="TF">Technical Fest</option>
												<option value="AN">Annual Fest</option>
											</optgroup>
										</select>
									</div>
									<hr>
									<div class="col-md-5" style="float:right;">
										<button type="button" id="saveExtra" class="btn btn-success btn-rounded">Save Changes</button>
									</div>
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