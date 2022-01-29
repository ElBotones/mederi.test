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
        @csrf
        <div class="form-group">
            <label for="id1">Id</label>
            <input readonly class="form-control" type="text" name="id1" id="id1" value="{{ $subscription->id }}">
        </div>
        <br>
        <div class="form-group">
            <label for="token">Token</label>
            <input readonly class="form-control" type="text" name="token" id="token" value="{{ $subscription->token }}">
        </div>
        <br>
        <div class="form-group">
            <label for="isActive">Está activo?</label>
            <input readonly class="form-control" type="text" name="isActive" id="isActive" value="{{ $subscription->isActive }}">
        </div>
        <br>
        <div class=" form-group">
            <label for="subscriptionTyoe">Tipo de subscripción</label>
            <input readonly class="form-control" type="text" name="subscriptionType" id="subscriptionType" value="{{ $subscription->subscriptionType }}">
        </div>
        <br>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</body>

</html>
