<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hospital Patient Information Form</title>
    <h1><center>Patient Details Registration Form</center></h1>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif

        <form  method="post" action="{{ route('validate.patientdetails') }}" novalidate>

            @csrf

            <div class="form-group mb-2">
                <label>First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name">

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name">

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" pattern="[0-9]{10}" class="form-control @error('email') is-invalid @enderror" name="email" id="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Contact Phone Number</label>
                <input type="tel" class="form-control @error('contact_phone') is-invalid @enderror" name="contact_phone" id="contact_phone" maxlength="10">

                @error('contact_phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Blood Group</label>
                <input type="text" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" id="blood_group" maxlength="5">

                @error('blood_group')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Disease </label>
                <input type="text" class="form-control @error('disease') is-invalid @enderror"  name="disease" id="disease" ></input>


                @error('disease')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group mb-2">
                <label>Address</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="15"></textarea>

                @error('address')
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



</html>
