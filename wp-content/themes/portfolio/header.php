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
        <div class="navbar-brand">
        <a class=" logo" href="#home" >Patrick
            Ngige</a>
            </div>
        <div class="collapse navbar-collapse justify-content-end" style="padding:.5rem;" id="navbarNav">
            <ul class="navbar-items">
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
            /* padding: 2px; */
            position:fixed;
            width:100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            top: 0px;
            opacity:1;
            background-color: #FAFAFA;
            height: 4rem;
            display: flex;
            font-display: row;
            justify-content: space-between;
        }
        .navbar-brand{
            font-size:1.5rem;
            padding-left: 1rem;
            font-weight:600;
            margin-top: 1rem;
            text-decoration:none;   
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;     
        }
        .navbar-brand a{
            text-decoration: none;
            color: #FF9B5D;
        }
        .navbar-items{
            display:flex;
            flex-direction:row;
            justify-content:end;
            text-decoration:none;
            gap:1rem;
            list-style: none;
            /* margin-top:2rem; */
            margin-right: 1rem;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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