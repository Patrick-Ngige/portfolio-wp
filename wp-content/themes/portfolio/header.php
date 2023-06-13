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

<body style="background-color:#F5F5F5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-top:-47px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 4px;">
        <a class="navbar-brand logo" href="#" style="font-weight:700">PNK</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" style="padding:1rem;" id="navbarNav">
            <ul class="navbar-nav">

                <li>
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li>
                    <a class="nav-link " href="#">About Me</a>
                </li>
                <li>
                    <a class="nav-link " href="#">My Services</a>
                </li>
                <li>
                    <a class="nav-link " href="#">Projects</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        .nav-link {
            color: black;
            font-weight: 600;
            border-radius: 5px;
        }

        .nav-link:hover {
            background-color: #FF9B5D;
            color: #FAFAFA;
            border-radius: 5px;
        }
    </style>