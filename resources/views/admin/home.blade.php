@extends('layouts.adminlayout')
@section('title')
Admin Dashboard
@endsection

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> 
					</div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h6 class="box-title">Total Branch</h6>
                            <ul class="list-inline two-part">
                                <li class="text-right"><i class="text-success"></i> <span class="text-success">{{ $consultancyBranches }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h6 class="box-title">Total Consultant</h6>
                            <ul class="list-inline two-part">
                                <li class="text-right"><i class="text-success"></i> <span class="text-success">{{ $consultants }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h6 class="box-title">Total Client</h6>
                            <ul class="list-inline two-part">
                                <li class="text-right"><i class="text-success"></i> <span class="text-success">{{ $clients }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h6 class="box-title">Total Institute</h6>
                            <ul class="list-inline two-part">
                                <li class="text-right"><i class="text-success"></i> <span class="text-success">{{ $institutes }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                            <h3 class="box-title">Category Wise Institutes</h3>                            
                            <div id="ct-visits" style="height: 230px;">
                                <canvas id="chart-area" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                        <div class="white-box">
                        <h3 class="box-title">Monthly visitors the current year</h3>                            
                            <div id="ct-visits" style="height: 230px;">
                                <canvas id="canvas2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- Change Password Modal -->
				
				<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Change Password</h4> </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Old Password:</label>
                                                    <input type="password" class="form-control" id="oldPassword"> </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">New Password</label>
                                                    <input type="password" class="form-control" id="newPassword">
                                                </div>
												<div class="form-group">
                                                    <label for="message-text" class="control-label">Confirm New Password</label>
                                                    <input type="password" class="form-control" id="confirmNewPassword">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                </div> 				
            </div>
        </div>

        <script type="text/javascript" src="http://www.chartjs.org/samples/latest/utils.js"></script>
        <script type="text/javascript" src="http://www.chartjs.org/dist/2.7.1/Chart.bundle.js"></script>
        <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data:  @php echo json_encode($instituteCategoryData) @endphp,
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: @php echo json_encode($instituteCategoryLabels) @endphp
        },
        options: {
            responsive: true
        }
    };
    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var color = Chart.helpers.color;
    var horizontalBarChartData = {
        labels: MONTHS,
        datasets: [{
            label: 'Visitors',
            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
            borderColor: window.chartColors.red,
            borderWidth: 1,
            data: @php echo json_encode($monthlyVisits) @endphp
        }]
    };
    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);

        ctx = document.getElementById("canvas2").getContext("2d");
        window.myHorizontalBar = new Chart(ctx, {
            type: 'horizontalBar',
            data: horizontalBarChartData,
            options: {
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide
                elements: {
                    rectangle: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                legend: {
                    position: 'right',
                },
                title: {
                    display: false,
                    text: 'Monthly visitors this year'
                }
            }
        });
    };    
    </script>
@endsection