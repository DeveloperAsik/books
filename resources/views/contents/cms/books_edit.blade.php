<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" method="post" action="/cms/books/update/{{ $book->id }}" style='width:100%'>
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
                                @if(isset($book) && !empty($book))
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input type="text" name='isbn' class="form-control" maxlength="9" value="{{$book->isbn}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" maxlength="255" value="{{$book->title}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="{{$book->price}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" name="year" class="form-control" placeholder="use format : [year]-[month]-[day]" value="{{$book->year}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Synopsys</label>
                                        <textarea class="form-control" name="synopsys" rows="3" placeholder="Enter ...">{{$book->synopsys}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Dimension</label>
                                        <input type="text" name="dimension" class="form-control" placeholder="use format : 12 X 12 cm" value="{{$book->dimension}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input type="text" name="weight" class="form-control" value="{{$book->weight}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Total Pages</label>
                                        <input type="text" name="total_pages" class="form-control" value="{{$book->total_pages}}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{$book->description}}</textarea>
                                    </div>
                                    <div class="form-check">
                                        @if($book->is_active == 1)
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