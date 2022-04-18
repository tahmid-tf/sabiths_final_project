<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    />

    <style>
        .text3 {
            font-weight: 300;
            font-size: 50px;
        }

        .text4 {
            font-weight: 700;
        }

        .name {
            width: 100%;
            background: #fff;
            border: none;
            padding: 13px 20px;
            margin-bottom: 20px;
            color: #3c3b3b;
            border-radius: 5px;
        }

        textarea {
            width: 100%;
            height: 200px;
            resize: none;
            padding: 13px 20px;
            color: #3c3b3b;
            border-radius: 5px;
        }

        .sign-up {
            margin-top: 100px;
        }

        body {
            background-color: #7690c5;
            color: black;
        }

        .container {
            margin: 10px;
        }
    </style>
</head>
<body>
<section id="footer">
    <div class="container">
        <div class="row">

            @foreach($contents as $content)

            <div class="col-lg-3 col-sm-12" style="margin: 20px">
                <div class="card" style="width: 18rem">
                    <img src="{{ asset('storage/'.$content->image) }}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">{{ $content->title }}</h5>
                        <p class="card-text">
                           {{ $content->content }}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
