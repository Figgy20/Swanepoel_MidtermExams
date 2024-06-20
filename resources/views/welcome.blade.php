<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}
        </style>
    </head>
    <body>
        <p>
            These are the books 
            <ul>
            <?php
                echo "<li>" . $products['product1'] . "</li>";
                echo "<li>" . $products['product2'] . "</li>";
                echo "<li>" . $products['product3'] . "</li>";
                echo "<li>" . $products['product4'] . "</li>";
            ?> 
            </ul> 
        </p>
    </body>
</html>
