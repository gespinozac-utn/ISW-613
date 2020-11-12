<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>Login</title>
        <style type="text/css">
        .spacer {
            border-top: 1px solid black;
            height: 5rem;
        }
        </style>
    </head>

    <body>
        <div class="container">

            <!-- {{{ NAVIGATON BAR }}}  -->
            <div class="row">
                <ul>
                    <div class="two columns">
                        <li>
                            <a href="/">Login</a>
                        </li>
                    </div>
                    <div class="two columns">
                        <li>
                            <a href="/register">Register</a>
                        </li>
                    </div>
                    <div class="two columns">
                        <li>
                            <a href="/users">List Users</a>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="spacer"></div> <!-- {{{ SEPARATOR }}} -->
            <h1>Login</h1>
            <div class="spacer"></div> <!-- {{{ SEPARATOR }}} -->

            <!-- {{{ FORM TO LOGIN }}}  -->
            <form action="/user/validate" method="POST">
                <div class="row">
                    <div class="six columns">
                        <label for="user">Username: </label>
                        <input type="text" name="username" class="u-full-width">
                    </div>
                    <div class="six columns">
                        <label for="password">Password: </label>
                        <input type="password" name="password" class="u-full-width">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="button button-primary u-pull-right" value="Sign in">
                </div>
            </form>

        </div>

    </body>

</html>