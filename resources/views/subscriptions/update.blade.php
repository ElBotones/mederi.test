<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <br>
    <br>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}


    {{-- {{     var_dump($errors->any()); //indica si tenemos errores 
    }} --}}
    <div class="container">
        <a class="btn btn-primary" href="{{ route('subscriptions.index') }}">Listado</a>
        <form action="{{ route('subscriptions.update', $subscription->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="token">Token</label>
                <input class="form-control" type="text" name="token" id="token" value="{{ $subscription->token }}">
                @error('token')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="isActive">Está activo?</label>
                <input type="checkbox" name="isActive" id="isActive">
            </div>
            <br>
            <div class="form-group">
                <label for="subscriptionTyoe">Tipo de subscripción</label>
                <input type="text" name="subscriptionType" id="subscriptionType"
                    value="{{ $subscription->subscriptionType }}">
                @error('subscriptionType')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</body>

</html>
