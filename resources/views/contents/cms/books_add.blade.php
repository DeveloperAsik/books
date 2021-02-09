<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" method="post" action="/cms/books/add" style='width:100%'>
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="text" name='isbn' class="form-control" maxlength="9">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" name="year" class="form-control" placeholder="use format : [year]-[month]-[day]">
                                </div>
                                <div class="form-group">
                                    <label>Synopsys</label>
                                    <textarea class="form-control" name="synopsys" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Dimension</label>
                                    <input type="text" name="dimension" class="form-control" placeholder="use format : 12 X 12 cm">
                                </div>
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="text" name="weight" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Total Pages</label>
                                    <input type="text" name="total_pages" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="is_active" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label">Active</label>
                                </div>
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