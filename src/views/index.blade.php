<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Test Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .email_form{
            background-color: #2d3748;
            padding: 20px;
            border-radius: 10px;
        }
        .email_form_header{
            background-color: #4a5568;
            padding: 10px;
            color: #a0aec0;
            font-weight: bolder;
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="email_form_header">
        Haroob Email Notification Package
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 email_form">
            <form action="{{ route("haroob.store") }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Subject</span>
                    <input type="text" class="form-control" value="{{ old('subject') }}" name="subject" placeholder="Subject" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Receiver</span>
                    <input type="text" class="form-control" name="receiver" value="{{ old('receiver') }}" placeholder="Email" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Body</span>
                    <textarea type="text" row="3"  class="form-control" value="{{ old('body') }}" name="body" placeholder="Message" ></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Send a test Mail</button>
                </div>

            </form>
        </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
