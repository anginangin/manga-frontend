<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background: #1F1F1F;
        }

        .page-wrap {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <img src="/assets/img/error.png" style="max-height: 200px">
                    <h2 class="my-4 lead font-weight-bold text-white">Oops..Something When Wrong.</h2>
                    <button class="btn" style="background: #FFDD00;border-radius: 11px;color:black"
                        onclick='window.location.reload(true);'>Back to Home</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>