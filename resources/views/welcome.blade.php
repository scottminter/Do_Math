<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <title>Laravel</title>
</head>

<body>
    <script>
        $(document).ready(function() {
            $('.mathNumber').on('input', function() {
                const num1 = $('#number1').val();
                const num2 = $('#number2').val();

                if (num1 && num2) {
                    $('#mathSubmit').removeAttr('disabled');
                } else {
                    $('#mathSubmit').attr('disabled', true);
                }
            });
        });
    </script>

    <div class="container">
        <div class="h1 text-center mt-3">Do Math</div>
        <hr>
        <div class="">
            <form action="/get-solution" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-sm-3">
                    <input type="text" name="number1" id="number1" class="form-control-lg mathNumber"
                        value="{{ $number1 }}">
                </div>
                <div class="col-sm-3 mt-3">
                    <select name="mathType" id="mathType" class="form-select mathNumber">
                        <option value="addition" {{ $mathType == 'addition' ? 'selected' : '' }}> + </option>
                        <option value="subtraction" {{ $mathType == 'subtraction' ? 'selected' : '' }}> - </option>
                        <option value="multiplication" {{ $mathType == 'multiplication' ? 'selected' : '' }}> *
                        </option>
                        <option value="division" {{ $mathType == 'division' ? 'selected' : '' }}> / </option>
                    </select>
                </div>
                <div class="col-sm-3 mt-3">
                    <input type="text" name="number2" id="number2" class="form-control-lg mathNumber"
                        value="{{ $number2 }}">
                </div>
                <hr>
                <div class="col-sm-3 fs-3 mt-3">
                    = {{ $solution }}
                </div>
                <button type="submit" id="mathSubmit" class="btn btn-primary mt-3" disabled>Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
