<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @if(isset($books) && !empty($books))
        @foreach($books AS $key => $value)
        <div class="col">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">IDR {{$value->price}}</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><b>Synopsys</b> : <br/>{{$value->synopsys}}</li>
                        <li><b>Weight</b> : <br/>{{$value->weight}}</li>
                        <li><b>Dimension</b> : <br/>{{$value->dimension}}</li>
                        <li><b>Total Pages</b> : <br/>{{$value->total_pages}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>