<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Book list Pages </h3><a style='float: right' href='/cms/books/add'>Create new Books</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="books_view" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ISBN</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Year</th>
                                <th>Synopsys</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($books) && !empty($books))
                                @foreach($books AS $key => $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->isbn}}</td>
                                        <td>{{$value->title}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->year}}</td>
                                        <td>{{$value->synopsys}}</td>
                                        <td>
                                            <a href='/cms/books/detail/{{$value->id}}'>Detail</a> | 
                                            <a href='/cms/books/creator/{{$value->id}}'>Creator</a> | 
                                            <a href='/cms/books/edit/{{$value->id}}'>Edit</a> | 
                                            <a href='/cms/books/delete/{{$value->id}}'>Delete</a>
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