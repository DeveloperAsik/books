<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" method="post" action="/cms/books/update/{{ $creator->id }}" style='width:100%'>
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Books</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                @if(isset($creator) && !empty($creator))
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name='first_name' class="form-control" value="{{$creator->first_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{$creator->last_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$creator->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" rows="3" placeholder="Enter ...">{{$creator->address}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile Phone</label>
                                        <input type="text" name="mobile_phone" class="form-control" value="{{$creator->mobile_phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <input type="text" name="birth_date" class="form-control" placeholder="use format : [year]-[month]-[day]" value="{{$creator->birth_date}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Place</label>
                                        <input type="text" name="birth_place" class="form-control" value="{{$creator->birth_place}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" class="form-control" value="{{$creator->company}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{$creator->description}}</textarea>
                                    </div>
                                    <div class="form-check">
                                        @if($creator->is_active == 1)
                                            @php $check = ' checked="checked"'; @endphp
                                        @else
                                            @php $check = ''; @endphp
                                        @endif
                                        <input type="checkbox" name="is_active" class="form-check-input"{{$check}}>
                                        <label class="form-check-label">Active</label>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="text" name="_token" value="{{ csrf_token() }}" hidden/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>