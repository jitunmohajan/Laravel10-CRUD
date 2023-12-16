@php
    $cars = ['BMW','Toyota','Audi','Mercedes'];   
    $carDetails = ['BMW' =>'7 Seried','Toyota' => 'CHR','Audi' => 'Q8','Mercedes' => 'Benq'];    

@endphp

@include('pages.header',['cars' => $cars])

@include('pages.home',['carDetails' => $carDetails])

@include('pages.footer')

{{-- IF  --}}
@includeif('pages.content')