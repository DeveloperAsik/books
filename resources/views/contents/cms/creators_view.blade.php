<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Book Creator list Pages </h3><a style='float: right' href='/cms/creator/add'>Add new Creator</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="creator_view" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($creators) && !empty($creators))
                                @foreach($creators AS $key => $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->first_name}}</td>
                                        <td>{{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{$value->mobile_phone}}</td>
                                        <td>
                                            <a href='/cms/creator/detail/{{$value->id}}'>Detail</a> | 
                                            <a href='/cms/creator/edit/{{$value->id}}'>Edit</a> | 
                                            <a href='/cms/creator/delete/{{$value->id}}'>Delete</a>
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