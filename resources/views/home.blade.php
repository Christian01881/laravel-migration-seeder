@extends('layouts.general')

@section('content')
    <main class="d-flex flex-column">
        @foreach ($trains as $train)
        <div class="d-flex align-items-end">
            <h5 class="pt-4">Agenzia: {{ $train->agency }}</h5>
            <h5 class="pt-4 ps-4">Da: {{ $train->from_station }}</h5>
            <h5 class="pt-4 ps-4">A: {{ $train->to_station }}</h5>
            <h5 class="pt-4 ps-4">Treno N°: {{ $train->train_code }}</h5>
            <h5 class="pt-4 ps-4">N° carrozze: {{ $train->train_cars }}</h5>
            <h5 class="pt-4 ps-4">{{ $train->date_of_departure }}</h5>
            <h5 class="pt-4 ps-4">{{ $train->date_of_arrival }}</h5>
            @if ($train->canceled == 0)
                <h5 class="ps-5 ms-5">Cancellato</h5>
            @endif
        </div>
        @endforeach
    </main>
@endsection
