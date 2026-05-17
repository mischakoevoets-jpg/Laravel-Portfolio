<!--
Source - https://stackoverflow.com/a/64799293
Posted by Steven Selolo, modified by community. See post 'Timeline' for change history
Retrieved 2026-05-17, License - CC BY-SA 4.0
-->

<!DOCTYPE html>
<html>

<head>


</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap');
    </style>
    <style>

        .body{
            font-family: 'Pixelify Sans', pixelify;
        }
        .sidebar {
            length: 100%;
            float: left;
        }
        body{
            font-family: 'Pixelify Sans', pixelify;
        }

        .sidenav {
            border: #818181;
            border-style: dotted;
            margin: 5%;
            width: 10%;
            /* Set the width of the sidebar */
            position: fixed;
            /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            left: 0;
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 20px;
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            color: black;
            font-size: 25px;
            display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: aquamarine;
        }

        /* Style page content */
        .main {}

        .textbox {
            border: dotted;
            border-color: #818181;
            align-self: center;
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            padding-left: 3%;
        }


        /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 11px;
            }
        }
    </style>

    <div class="sidebar">
        <div class="sidenav">
            <a href="/">Home</a>
            <a href="/projects">Projects</a>
            <a href="/music">Music</a>
            <a href="/contact">Contact</a>
        </div>
    </div>
  <!-- Navbar Area End -->


  @yield('content')
  <!--for adding your content-->

  <!-- Add Footer Area Start -->

  <!-- Add Footer Area End -->

  <!-- **** All JS Files here ***** -->

</body>

</html>