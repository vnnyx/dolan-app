<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- The .loader-wrapper is going to be your main container that will determine the overall width and height of the spinner -->
    <div class="loader-wrapper">
        <!-- The .loader is going to be the element you will use to control the borders to get the displayed effect -->
        <div class="loader">
            <!-- 
                The .loader.loader-inner is going to repeat the same effects as the outer loader.
                The only difference is that we use an additional lass to control 
                the inner loader without changing the styles if the original outer loader.
            -->
            <div class="loader loader-inner"></div>
        </div>
        <h1>Loading...</h1>
</body>
</html>