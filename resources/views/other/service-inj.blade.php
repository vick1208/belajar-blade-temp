<html>
    <body>
        @inject('service', 'App\Services\Greet')
        <h1>{{ $service->sayHello($name) }}</h1>
    </body>
</html>