@extends ('layouts.master')

@section('title')
comics
@endsection

@section ('content')
<div class="container p-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 g-4">
        @foreach ($comics as $comic)
        <div class="col d-flex align-items-stretch">
            <x-card>
                <x-slot:img>{{$comic["thumb"]}}</x-slot:img>
                <x-slot:title>{{$comic["title"]}}</x-slot:title>
                <x-slot:price>{{$comic["price"]}}</x-slot:price>
                <x-slot:series>{{$comic["series"]}}</x-slot:series>
            </x-card>
        </div>
        @endforeach
    </div>

</div>
@endsection