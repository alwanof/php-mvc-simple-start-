<?php

$data = [
    'title' => 'Home',
    'content' => [
        [
            'head' => 'Welcome',
            'author' => 'Samir Jaber',
            'date' => '2019-01-01'
        ],
        [
            'head' => 'Hello',
            'author' => 'Ahmad Abdo',
            'date' => '2019-01-02'
        ],
        [
            'head' => 'hi',
            'author' => 'Azam Kamal',
            'date' => '2019-01-04'
        ]
    ]
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .list-group {
            max-width: 460px;
            margin: 4rem auto;
        }

        .form-check-input:checked+.form-checked-content {
            opacity: .5;
        }

        .form-check-input-placeholder {
            border-style: dashed;
        }

        [contenteditable]:focus {
            outline: 0;
        }

        .list-group-checkable .list-group-item {
            cursor: pointer;
        }

        .list-group-item-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
        }

        .list-group-item-check:hover+.list-group-item {
            background-color: var(--bs-light);
        }

        .list-group-item-check:checked+.list-group-item {
            color: #fff;
            background-color: var(--bs-blue);
        }

        .list-group-item-check[disabled]+.list-group-item,
        .list-group-item-check:disabled+.list-group-item {
            pointer-events: none;
            filter: none;
            opacity: .5;
        }

        .list-group-radio .list-group-item {
            cursor: pointer;
            border-radius: .5rem;
        }

        .list-group-radio .form-check-input {
            z-index: 2;
            margin-top: -.5em;
        }

        .list-group-radio .list-group-item:hover,
        .list-group-radio .list-group-item:focus {
            background-color: var(--bs-light);
        }

        .list-group-radio .form-check-input:checked+.list-group-item {
            background-color: var(--bs-body);
            border-color: var(--bs-blue);
            box-shadow: 0 0 0 2px var(--bs-blue);
        }

        .list-group-radio .form-check-input[disabled]+.list-group-item,
        .list-group-radio .form-check-input:disabled+.list-group-item {
            pointer-events: none;
            filter: none;
            opacity: .5;

        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        main>.container {
            padding: 60px 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP COURSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about/us">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- Begin page content -->
    <main class="flex-shrink-0">

        <div class="container">
            <h1 class="mt-5 text-center"><?= $data['title'] ?></h1>
            <div class="list-group w-auto">
                <?php foreach ($data['content'] as $item) : ?>
                    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <img src="https://github.com/twbs.png" alt="twbs" class="rounded-circle flex-shrink-0" width="32" height="32">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                                <h6 class="mb-0"><?= $item['head']; ?></h6>
                                <p class="mb-0 opacity-75"><?= $item['date']; ?></p>
                            </div>
                            <small class="opacity-50 text-nowrap"><?= $item['author']; ?></small>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>


        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>