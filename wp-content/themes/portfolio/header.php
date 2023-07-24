<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="#home" >Patrick
            Ngige</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" style="padding:.5rem;" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="#about-me">About Me</a>
                </li>
                <li>
                    <a class="nav-link" href="#my-services">My Services</a>
                </li>
                <li>
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="nav-link" href="#contact-me">Contact Me</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        body{
            overflow-x:hidden;
            /* font-size:14px; */
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar{
            z-index:1;
            padding: 3px;
            position:fixed;
            width:100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            top: 0px;
            opacity:1;
            background-color: #FAFAFA;
        }
        .navbar-nav{
            display:flex;
            flex-direction:row;
            justify-content:end;
            text-decoration:none;
            gap:1rem;
            list-style: none;
            top:0;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        .navbar-brand{
            font-weight:400;
            margin-left:2rem;
            text-decoration:none;
        }
        .nav-link {
            color: black;
            font-weight: 600;
            text-decoration: none;
            color: black;
            opacity: .7;
        }

        .nav-link:hover {
            color: #FF9B5D;
            border-radius: 5px;
        }

        @media (max-width:480px) {
            .nav-link {
                color: black;
                font-weight: 500;
                border-radius: 5px;
                text-decoration: none;
                color: black;
                opacity: .7;
                margin-right: 10px;
            }
        }
    </style>