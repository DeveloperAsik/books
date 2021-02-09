<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" method="post" action="/cms/users/update/{{ $user->id }}" style='width:100%'>
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
                                @if(isset($user) && !empty($user))
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name='first_name' class="form-control" value="{{$user->first_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"  value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-control" name="group">
                                            @php $group_id = ''; @endphp
                                            @if(isset($user_groups) && !empty($user_groups))
                                                @php $group_id = $user_groups->group_id; @endphp
                                            @endif
                                            @if(isset($groups) && !empty($groups))
                                                @foreach($groups AS $key => $value)
                                                    @if($group_id == $value->id)
                                                        @php $selected = ' selected=""'; @endphp
                                                    @else
                                                        @php $selected = ''; @endphp
                                                    @endif
                                                    <option value="{{$value->id}}"{{$selected}}>{{$value->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-check">
                                        @if($user->is_active == 1)
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