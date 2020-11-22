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
        <title>List of Users</title> <!-- {{{ REMBEMBER CHANGE THE TITLE }}} -->
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
            <h1>List of users</h1>
            <div class="spacer"></div> <!-- {{{ SEPARATOR }}} -->

            <table class="u-full-width">
                <thead>
                    <tr>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                foreach ($users as $user) {
                    $name = $user['name'];
                    $username = $user['username'];
                    $id = $user['id'];
                    $linkDelete = site_url("user/delete/$id");
                    $linkEdit = site_url("user/edit/$id");
                    $confirm = 'return confirm("Are you sure?");';
                    echo "
                    <tr>
                        <td>$name</td>
                        <td>$username</td>
                        <td>
                            <a href='$linkEdit'>Edit</a> | 
                            <a href='$linkDelete' onclick='$confirm'>Delete</a>
                        </td>
                    </tr>" . PHP_EOL;
                }
                ?>
                </tbody>
            </table>

    </body>

</html>