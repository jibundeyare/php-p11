<?php

require __DIR__.'/../vendor/autoload.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        dump($_COOKIE);
        ?>
    </div>
    <div id="cookies"></div>
    <script>
        // [javascript - How to delete a cookie? - Stack Overflow](https://stackoverflow.com/a/2144404/2003537)
        function get_cookie(name){
            return document.cookie.split(';').some(c => {
                return c.trim().startsWith(name + '=');
            });
        }

        // [javascript - How to delete a cookie? - Stack Overflow](https://stackoverflow.com/a/2144404/2003537)
        function delete_cookie( name, path, domain ) {
            if( get_cookie( name ) ) {
                document.cookie = name + "=" +
                ((path) ? ";path="+path:"")+
                ((domain)?";domain="+domain:"") +
                ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
            }
        }

        delete_cookie('foo');
        delete_cookie('baz');

        let cookies = document.getElementById('cookies');
        cookies.innerHTML = document.cookie;
    </script>
</body>
</html>