<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | First</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Nunito', sans-serif;
            }
            .wrapper {
                height: 100vh;
                background-color: cornflowerblue;
            }
            header  {
                height: 80px;
                background-color: black;
                color: aliceblue;
            }
            .container {
                width: 75%;
                margin: auto;
                height: 100%;
            }
            .flex {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .navbar {
                height: 100%;
            }
            .navbar ul, .card ul {
                list-style: none;
            }
            .navbar ul li {
                display: inline-block;
                padding: 0 1.5rem;
                font-size: 1.5rem;
                font-weight: 600;
            }
            .navbar ul li a, .card ul li a {
                color: aliceblue;
                text-decoration: none;
            }
            footer{
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: aliceblue;
            }
            .card {
                flex-basis: 20%;
                margin: 1rem;
                padding: 1rem;
            }
            .card ul li {
                padding: .5rem;
            }
        </style>
    </head>
    <body>