<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Books</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            @if(isset($creator) && !empty($creator))
                            <div class="form-group">
                                <label>First Name</label>
                                <p>{{$creator->first_name}}</p>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <p>{{$creator->last_name}}</p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <p>{{$creator->email}}</p>
                            </div>
                            <div class="form-group">
                                <label>Mobile Phone</label>
                                <p>{{$creator->mobile_phone}}</p>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" disabled="" placeholder="Enter ...">{{$creator->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Birth Date</label>
                                <p>{{$creator->birth_date}}</p>
                            </div>
                            <div class="form-group">
                                <label>Birth Place</label>
                                <p>{{$creator->birth_place}}</p>
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <p>{{$creator->company}}</p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" disabled="" placeholder="Enter ...">{{$creator->description}}</textarea>
                            </div>
                            <div class="form-check">
                                @if($creator->is_active == 1)
                                @php $check = ' checked="checked"'; @endphp
                                @else
                                @php $check = ''; @endphp
                                @endif
                                <input type="checkbox" name="is_active" disabled="" class="form-check-input"{{$check}}>
                                <label class="form-check-label">Active</label>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>