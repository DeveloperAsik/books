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
                            @if(isset($book) && !empty($book))
                            <div class="form-group">
                                <label>ISBN</label>
                                <p>{{$book->isbn}}</p>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <p>{{$book->title}}</p>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <p>{{$book->price}}</p>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <p>{{$book->year}}</p>
                            </div>
                            <div class="form-group">
                                <label>Synopsys</label>
                                <textarea class="form-control" name="synopsys" rows="3" disabled="" placeholder="Enter ...">{{$book->synopsys}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Dimension</label>
                                <p>{{$book->dimension}}</p>
                            </div>
                            <div class="form-group">
                                <label>Weight</label>
                                <p>{{$book->weight}}</p>
                            </div>
                            <div class="form-group">
                                <label>Total Pages</label>
                                <p>{{$book->total_pages}}</p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="3" disabled="" placeholder="Enter ...">{{$book->description}}</textarea>
                            </div>
                            <div class="form-check">
                                @if($book->is_active == 1)
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