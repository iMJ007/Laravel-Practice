@if(5 > 10)
    <p>5 is less than 10</p>
@elseif(5 == 10)
    <p>5 is less than 10</p>
@else
    <p>5 is equal to 10</p>
@endif

@unless(empty($name))
    <p>Name isn't empty</p>
@endunless

@empty(!$name)
    <p>Name is empty</p>
@endempty

@isset($name)
    <p>Name has been set</p>
@endisset
