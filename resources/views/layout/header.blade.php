@isset($title)
<h1>{{ $title }}</h1>
@else
<h1>Github is where I start</h1>
@endisset

@isset($desc)
    <p>{{ $desc }}</p>
@endisset