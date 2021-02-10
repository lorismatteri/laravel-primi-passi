<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

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
            main {
                height: calc(100vh - 80px - 280px);
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
            }
            .navbar ul li a, .card ul li a {
                color: aliceblue;
                text-decoration: none;
            }
            footer{
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
    <div class="wrapper">
            <header>
                <div class="container">
                    <nav class="navbar flex">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li><a href="#">CONTACTS</a></li>
                            <li><a href="#">LOREM</a></li>
                            <li><a href="#">LOREM</a></li>
                        </ul>
                    </nav>
                </div>

            </header>

            <main>
                <h1>ABOUT</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nam voluptatum similique a libero nobis alias tempora quibusdam quia quos recusandae hic accusantium, quidem dicta provident harum voluptate. Fuga, iure?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nam voluptatum similique a libero nobis alias tempora quibusdam quia quos recusandae hic accusantium, quidem dicta provident harum voluptate. Fuga, iure?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nam voluptatum similique a libero nobis alias tempora quibusdam quia quos recusandae hic accusantium, quidem dicta provident harum voluptate. Fuga, iure?</p>
            </main>

            <footer>
                <div class="container flex">
                    <div class="card">
                        <h3>HOME</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>ABOUT</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>CONTACTS</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>LOREM</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>LOREM</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
