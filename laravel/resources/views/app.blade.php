<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csfr-token" content="{{csrf_token()}}">

        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <title>NenMas | SPA</title>

        <script type="application/javascript">
            window.Laravel = eval('<?= json_encode(['csrf_token' => csrf_token()]);?>');
        </script>

    </head>
    <body>
        <div id="app">
            test
            <router-view></router-view>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>