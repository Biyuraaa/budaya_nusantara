</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Culture Details</title>
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .card {
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        .card-subtitle {
            font-size: 18px;
            color: #6c757d;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body class="nav-md" style="padding-top: 60px">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="card">

                  @if ($item->image)
                    <img src="{{ asset('assets/images/'.$item->image) }}" alt="{{ $item->name }}">
                  @else
                    <img src="{{ asset('assets/images/rumah/bali.jpg') }}" alt="Culture Image">
                  @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <h6 class="card-subtitle mb-2">Kategori: {{ $item->category->name }}</h6>
                        <h6 class="card-subtitle mb-2">Provinsi: {{ $item->province->name }}</h6>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
