<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Midterm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


    <style>
        .left-side {
            background-color: #028EA3;
            color: white;
        }

        .right-side {
            background-color: #FCB968;
            color: #028EA3;
        }

        .card-custom {
            background-color: transparent;
            width: 50%;
        }

        .card-img-custom {
            border-radius: 50%;
            height: 250px;
            width: 250px;
        }

        .card-title-custom {
            color: white;
            font-size: 50px;
        }

        hr {
            border-bottom: 10px solid white;

        }

        h3 {
            color: white;
        }

        .resume-underline {
            color: white;
            border-bottom: 6px solid white;
            width: 50%;
            margin: auto;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 left-side">
            <div class="card bg-transparent border-0 m-auto" style="width: 18rem;">
                <img src="{{ asset('img/sabith.jpg') }}" class="card-img-top card-img-custom" alt="...">
                <div class="card-body">
                    <h5 class="card-title card-title-custom">Sabith Ahmed</h5>
                    <hr>
                    <h3 class="card-text">CAREER OBJECTIVE</h3>
                    <p class="card-text">To build my career in a challenging position in a reputed Corporate office where I will be able to contribute effectively to a team framework by securing a position with high growth, learning opportunity, scope of utilizing my innovation with strong analytical skills and creativity from academic study combined with a practical understanding and currently seeking to develop a long-term career. I look forward to doing more for the betterment of the economy and built a brighter future for the people around.</p>
                </div>
            </div>
        </div>

        <div class="col-md-7 right-side text-center">
            <h3 style="color: #028EA3;">EXPERIENCE</h3>
            <hr class="resume-underline">
            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h3>2017 - 2018</h3>
                    <h5 class="card-title">LEAD RESEARCH SPECIALIST</h5>
                    <h6 class="card-subtitle mb-2 text-muted">GradConnect | A Consultancy Firm</h6>
                    <p class="card-text">Managed students who where looking to apply to Australia
                        and Canada for higher studies and assessed their documents</p>
                </div>
            </div>

            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h3>2019</h3>
                    <h5 class="card-title">ENGLISH TRANSLATOR</h5>
                    <h6 class="card-subtitle mb-2 text-muted">BRAC | Institute of Educational Development</h6>
                    <p class="card-text">Translated scripts and text book lessons for rohingya project</p>
                </div>
            </div>

            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h5 class="card-title">CUSTOMER SERVICE REPRESENTATIVE</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Express Entree | USA based Food Delivery Service</h6>
                    <p class="card-text">Took orders for food from Uber GrabHub etc.</p>
                </div>
            </div>

            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h3>2020</h3>
                    <h5 class="card-title">MARKETING MANAGER</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Briddhi foundation | Non- Profit Organization</h6>
                    <p class="card-text">Carried out several campaigns, gathering of sponsorship and
                        funds and content creation</p>
                </div>
            </div>

            <h3 style="color: #028EA3; margin-top: 50px;">EDUCATION</h3>
            <hr class="resume-underline">
            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h3>2020</h3>
                    <h5 class="card-title">INDEPENDENT UNIVERSITY, BANGLADESH</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Major in Computer Science</h6>
                    <p class="card-text">Minor in Media and Communication</p>
                </div>
            </div>

            <div class="card m-auto bg-transparent border-0" style="width: 28rem;">
                <div class="card-body">
                    <h3>2020</h3>
                    <h5 class="card-title">MAPLE LEAF INTERNATIONAL SCHOOL</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A Levels in Physics and Maths | 2016</h6>
                    <p class="card-text">O Levels in 8 Subjects | 2014</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
