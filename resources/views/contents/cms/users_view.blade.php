<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Book list Pages </h3><a style='float: right' href='/cms/users/add'>Create new Users</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="books_view" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($users) && !empty($users))
                                @foreach($users AS $key => $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->first_name}}</td>
                                        <td>{{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>
                                            <a href='/cms/users/edit/{{$value->id}}'>Edit</a> | 
                                            <a href='/cms/users/delete/{{$value->id}}'>Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
<!-- /.card -->