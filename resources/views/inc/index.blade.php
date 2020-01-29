




    <div class="" ><!-- Wrapper -->
    	<div class="wrapper">
		
			<!-- Content -->
			<div class="">
			
		        <!-- Top content -->
		        <div class="">
			        <div class="container">
				<!--	<h3 class="">Full Visitors Data Table</h3>-->
					 <div class="row">
			  <div class="col-lg-12">
              <a href="/home/exportexcel" type="button" class="btn btn-primary pull-right mt-1 " >Export to Excel</a>
        <a href="{{url('home/pdf')}}" type="button" class="btn btn-danger pull-left mt-1 mr-2">Export to PDF</button>
				<a href="/users" type="button" class="btn btn-warning pull-left mt-1 mr-2" >Users</a>
			  </div>
			</div>
			<br>
			            <div class="row">
			                <div class="">
			 <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>phone number</th>
                              <th>Email</th>
                              <th>Profession</th>
                              <th>Host</th>
                              <th>Purpose</th>
                              <th>Date and Time</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($visitors) > 0)
                        @foreach($visitors as $visitor)
                        <tr>
                        <td>{{$visitor->firstname}}</td>
                        <td>{{$visitor->lastname}}</td>
                        <td>{{$visitor->number}}</td>
                        <td>{{$visitor->email}}</td>
                        <td>{{$visitor->profession}}</td>
                        <td>{{$visitor->host}}</td>
                        <td>{{$visitor->purpose}}</td>
                        <td>{{$visitor->created_at}}</td>
                        </tr>
                        @endforeach   
                        @endif
                        <tfoot>
                            <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>phone number</th>
                              <th>Email</th>
                              <th>Profession</th>
                              <th>Host</th>
                              <th>Purpose</th>
                              <th>Created_at</th>
                            </tr>
                          </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
								</div>
			                </div>
			            </div>
			        </div>
		        </div>
		

	         </div>
            </div>
            
