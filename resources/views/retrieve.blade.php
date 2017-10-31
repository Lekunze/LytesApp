<h1> Hello </h1>
@if($results)
    @foreach($results as $datum)
        <p>{{$datum->product_name}}</p>
    @endforeach
@endif