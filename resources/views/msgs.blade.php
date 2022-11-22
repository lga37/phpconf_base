@php #echo "<pre>";print_r(session()->all()); echo "</pre>"; 
@endphp

@if(session()->has('success'))
    {{ session()->get('success') }}
@elseif(session()->has('error'))
    @if ($errors->any())
    {{ session()->get('error') }}
    @endif
@endif
