{{-- Comparing multiple position conditions --}}

@switch($data['name'])
    @case('John')
    <h2>Name is John</h2>
    @break
    @case('Dary')
    <h2>Name is Dary</h2>
    @break
    @case('Mike')
    <h2>Name is Mike</h2>
    @break
    @default
    <h2>No match found</h2>
@endswitch

{{-- Loops--}}
@foreach($data['cars'] as $car)
    <h3>{{ $car }}</h3>
@endforeach

