<h1>Header</h1>

@foreach ($cars as $key => $car)
    <p>{{ $key }} -{{ $car }}</p>
@endforeach