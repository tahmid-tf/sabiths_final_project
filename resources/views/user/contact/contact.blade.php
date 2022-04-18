<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

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
            background-color: #7690C5;
            color: white;
        }
    </style>
</head>
<body>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="text3" style="margin-top: 100px; margin-bottom: 20px;">Say <span class="text4">Hello</span>
                </h1>
                <p>Send us a Message!</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="sign-up">
                    <form action="{{ route('contact.store') }}" method="post">
                        {{ csrf_field() }}
                        NAME <input type="text" name="name" placeholder="Your Name*" class="name"/> <br>
                        EMAIL <input type="email" name="email" placeholder="Your Email*" class="name"/> <br>
                        MESSAGE <textarea placeholder="Your Message*" name="content"></textarea>
                        <input type="submit">
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
