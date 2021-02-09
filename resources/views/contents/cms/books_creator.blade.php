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
                            @if(isset($creator) && !empty($creator))
                                    <tr>
                                        <td>{{$creator->id}}</td>
                                        <td>{{$creator->first_name}}</td>
                                        <td>{{$creator->last_name}}</td>
                                        <td>{{$creator->email}}</td>
                                        <td>{{$creator->address}}</td>
                                        <td>{{$creator->mobile_phone}}</td>
                                        <td>
                                            <a href='/cms/books/change/{{$creator->id}}'>Rubah Creator</a>
                                        </td>
                                    </tr>
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