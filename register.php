
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
	.opp{
		opacity:0.5;
	}
	.opp:hover{
		opacity:1;
	}
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>
</head>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"/>
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Register New User</h3>
                <form action="RegUser.php" method="post">
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="username"/>
                      <label class="form-label" for="form3Example1m">Enter your Name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" name="email"/>
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" style="padding:50px;"/>
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" name="cstate">
                      <option value="1">State</option>
                      <option value="2">Karnataka</option>
                      <option value="3">Kerala</option>
                      <option value="4">Maharastra</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" name="pincode"/>
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="pass1"/>
                  <label class="form-label" for="form3Example99">Enter you Password</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="pass2"/>
                  <label class="form-label" for="form3Example99">Re-Enter you Password</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2" value="submit" name="Reg_User">Submit form</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>