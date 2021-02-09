<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="card">
                <!-- /.row -->
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Books</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Title</th>
                                        <th>price</th>
                                        <th>Synopsys</th>
                                        <th>Total Pages</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($books) && !empty($books))
                                        @foreach($books AS $key => $val)
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">{{$val->isbn}}</a></td>
                                            <td><a href="pages/examples/invoice.html">{{$val->title}}</a></td>
                                            <td><a href="pages/examples/invoice.html">{{$val->price}}</a></td>
                                            <td><a href="pages/examples/invoice.html">{{$val->synopsys}}</a></td>
                                            <td><a href="pages/examples/invoice.html">{{$val->total_pages}}</a></td>
                                        </tr> 	
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>