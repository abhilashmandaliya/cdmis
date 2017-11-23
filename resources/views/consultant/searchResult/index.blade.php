@extends('layouts.adminlayout')

@section('title')

Search Result

@endsection

@section('content')

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Location</h4> </div>                    
                </div>

                 @isset($result)
                    @foreach($result as $res)
                <div class="row">
                                       <!-- /.col-lg-4 -->
                    <div class="col-lg-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> {{ $res -> iname }}
                                
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
									<div class="row">
									<div class="col-sm-3">
										<div class="col-lg-6">
											<img src={{ $res -> ilogo }} height="100px" width="100px"></img>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="col-lg-9">
											<label>City:</label>&nbsp;{{ $res -> icity}}
										</div>
										<div class="col-lg-9">
											<label>Contact Number</label>&nbsp;{{ $res -> inum}}
										</div>
										<div class="col-lg-9">
											<label>Website:</label>&nbsp;{{ $res -> isite}}
										</div>
									</div>
									
								<div class="row">
								<div class="col-sm-12">
										<div class="col-lg-6">
										
										</div>
										<div class="col-lg-6">
											<div class="col-lg-3">
											</div>
											<form method="get" action="/institute/{{ $res->iid }}">
												<input type="hidden" name="instaid" value="value">
											<div class="col-lg-3">
											<button type="submit" class="btn btn-primary btn-rounded" >View More</button>
											</div>
											</form>
											</div>
										</div>
								</div>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
 
                </div>
                <!-- /row -->
                    @endforeach
                @endisset

            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- /#page-wrapper -->

@endsection