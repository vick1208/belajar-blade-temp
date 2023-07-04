@once
    <style>
        .red{
            color: red;
        }
    </style>
@endonce

<h1>{{ $user['name'] }}</h1>

<ul>
    @foreach ($user['foods'] as $food)
        <li class="red">{{ $food }}</li>
    @endforeach
</ul>