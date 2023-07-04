<html>

<body>
    @while ($i < 10)
        Current value is {{ $i }}
        @php
            $i++;
        @endphp
    @endwhile
</body>

</html>