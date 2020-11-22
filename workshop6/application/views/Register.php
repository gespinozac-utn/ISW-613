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
        <link rel="shortcut icon" href="https://www.utn.ac.cr/misc/favicon.ico" type="image/vnd.microsoft.icon" />
        <title>Register</title> <!-- {{{ REMBEMBER CHANGE THE TITLE }}} -->
        <style type="text/css">
        /* {{{ CSS CODE GOES HERE }}} */

        /* Basic spacer using a div */
        .spacer {
            border-top: 1px solid black;
            height: 5rem;
        }
        </style>
    </head>

    <body>

        <div class="container">
            <!-- {{{ HTML CODE GOES HERE }}}  -->

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
            <h1>User Register</h1>
            <div class="spacer"></div> <!-- {{{ SEPARATOR }}} -->

            <!-- {{{ FORM USER REGISTER }}}  -->
            <form action="/user/newUser" method="POST">

                <!-- {{{ First Row, with full name and username }}}  -->
                <div class="row">
                    <div class="six columns">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" class="u-full-width" required>
                    </div>
                    <div class="six columns">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="u-full-width" required>
                    </div>
                </div>

                <!-- {{{ Second Row, with password and confirm password }}}  -->
                <div class="row">
                    <div class="six columns">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="u-full-width" required>
                    </div>
                    <div class="six columns">
                        <label for="confirmPass">Confirm password:</label>
                        <input type="password" name="confirmPass" class="u-full-width" required>
                    </div>
                </div>

                <!-- {{{ Submit button }}} -->
                <input type="submit" class="button button-primary u-pull-right">

            </form>

        </div>

    </body>

</html>