<html>

<body>
    @includeWhen($user['owner'], 'layout.header-admin')
    <p>Selamat Datang {{$user['name']}}</p>
</body>

</html>