 @extends('layouts.adminlayout')
@section('title')
Manage Location - State
@endsection
@section('content') 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Users</h4> </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Admin</h3>
							
                            <div class="scrollable">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
												<th>Branch</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @isset($users->users)
                                                @foreach($users->users as $user)
                                            <tr>
												<td id="adminId" value="">{{ $user->id }}</td>
                                                <td id="adminName" value="">{{ $user->name }}</td>
                                                <td id="adminEmail" value="">{{ $user->email }}</td>
                                                <td id="adminBranch" value="">{{ $user->consultancy_branch }}</td>	

                                                 <td style="text-align:center;">
                                                        <button class="btn btn-block btn-sm btn-danger btn-rounded" onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $user->id }}').submit();">
                                                                <i class="fa fa-remove fa-fw"></i> Delete
                                                        </button>
                                                        <form id="delete-form-{{ $user->id }}" action="user/{{ $user->id }}" method="POST" style="display: none;">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            {{ csrf_field() }}
                                                        </form>
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
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>