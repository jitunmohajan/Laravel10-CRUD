<h1>Home</h1>

@foreach ($carDetails as $key => $carDetail)
    <p>{{ $key }} -{{ $carDetail }}</p>
@endforeach