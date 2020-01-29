<div class="" ><!-- Wrapper -->
    <div class="wrapper">
    
        <!-- Content -->
        <div class="">
        
            <!-- Top content -->
            <div class="">
                <div class="container">
                <h3 class="">All Users</h3>
                 <div class="row">
          <div class="col-lg-12">
          <a href="home" type="button" class="btn btn-primary pull-right mt-1 " >Back</button></a>
            <a href="{{ route('register') }}" type="button" class="btn btn-success pull-left mt-1 " >Add User</a>
          </div>
        </div>
        <br>
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
         <div class="box">
            <div class="box-header">
              
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Names</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
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
        <!-- End content -->