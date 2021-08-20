<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hospital Patient Visits Form</title>
    <h1><center>Patient Visits Form</center></h1>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css"/ >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
</head>

<body>
    <div class="container mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif

        <form  method="post" action="{{ route('validate.patientvisits') }}" novalidate>

            @csrf

            <div class="form-group mb-2">
                <label>Patient Id</label>
                <input type="text" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" id="patient_id">

                @error('patient_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>From Time </label>
                <input type="text" class="form-control @error('from_time') is-invalid @enderror" autocomplete="off" name="from_time" id="datetimepicker" ></input>


                @error('from_time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>To Time</label>
                <input type="text" class="form-control @error('to_time') is-invalid @enderror" autocomplete="off" name="to_time" id="datetimepicker2" ></input>
                @error('to_time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Register" class="btn btn-secondary btn-block">
            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
        $('#datetimepicker').datetimepicker({
    format:'Y-m-d H:i:s'
});


    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#datetimepicker2').datetimepicker({
        format:'Y-m-d H:i:s'
    });


        });

</script>


</html>
