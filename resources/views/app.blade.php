<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/css/uikit.min.css" />

        <title>Copay Connoisseur</title>
    </head>
    <body>


        <div id="app"></div>

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="js/bcmath-min.js" type="text/javascript"></script>
        <script src="js/pdf417-min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit-icons.min.js"></script>

    </body>
</html>
