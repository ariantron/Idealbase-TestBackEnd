<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{secure_asset('styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('styles/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{secure_asset('styles/local.css')}}">
    <link rel="stylesheet" href="{{secure_asset('styles/master.css')}}">
    <title>Idealbase Contact Form</title>
</head>
<body style="background-color: black">
<div id="Contact1" class="container-fluid px-0  mainSection10">
    <div class="container">
        <h3 class="text-center">LET'S BE IN TOUCH</h3>
    </div>
</div>
<div class="container-fluid  mainSection10-2">
    <div class="container">
        <form class="row justify-content-evenly align-items-center">
            <div class="col-md-5 col-12 ">
                <div>
                    <label for="subject" class=" d-flex h6">Subject</label>
                    <select id="subject" class="form-select mainSection10-select"
                            aria-label="Default select example">
                        <option value="1">Information Request</option>
                        <option value="2">Business Proposal</option>
                        <option value="3">Job Offer</option>
                        <option value="4">General</option>
                    </select>
                </div>
                <div>
                    <br/>
                    <label for="name" class=" d-flex h6">Name</label>
                    <div class="col">
                        <input id="name" type="text" class="form-control" placeholder="name" aria-label="Last name"/>
                    </div>
                </div>
                <div>
                    <br/>
                    <label for="phone" class="d-flex h6">Phone</label>
                    <div class="col">
                        <input id="phone" type="tel" class="form-control" placeholder="+1" aria-label="Last name"/>
                    </div>
                </div>
                <br/>
                <div>
                    <label for="email" class="form-label d-flex h6">Email address</label>
                    <input id="email" type="email" class="form-control" placeholder="name@example.com"/>
                </div>
            </div>
            <div class="col-md-5 col-12 mt-5">
                <div>
                    <label for="website" class="form-label d-flex h6">Website</label>
                    <input id="website" type="url" class="form-control" placeholder="https://"/>
                    <span class="col-5"></span>
                </div>
                <br/>
                <div>
                    <label for="details" class="d-flex h6 form-label">Details</label>
                    <textarea name="details" class="form-control" id="details" rows="4"></textarea>
                </div>
                <button type="submit" class="send d-flex justify-content-end align-items-center buttonsend">
                    <a href="javascript:submit();">Send<i class="bi bi-arrow-right-short"></i></a>
                </button>
                <div class="d-flex justify-content-end align-items-center emaill">
                    <p class="d-flex justify-content-center align-items-center">Please Kindly</p>
                    <p class="d-flex justify-content-center align-items-center px-2">
                        <a class="emailbtn" href="mailto:Idealmaterial@yahoo.com">Email</a>
                    </p>
                    <p class="d-flex justify-content-center align-items-center">us</p>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{secure_asset('scripts/bootstrap.min.js')}}"></script>
@include('scripts')
</body>
</html>
