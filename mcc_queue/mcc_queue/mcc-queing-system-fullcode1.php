<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC Queueing System</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       /* Keep your existing gradient */
body {
    background: linear-gradient(to right, #ff3b30 0%, #ffffff 50%, #007aff 100%);
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    overflow-x: hidden;
}


body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    background: url("logo.png") center no-repeat;
    background-size: 50%;     /* adjust size here */
    opacity: 0.10;            /* watermark transparency */
    
    pointer-events: none;     /* allow clicking through */
    z-index: -1;              /* keep behind all content */
}

        .panel-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .header-box {
            background: #0d47a1;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .now-serving-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }
        .next-number {
            font-size: 28px;
            font-weight: bold;
            margin: 0 10px;
        }
    </style>
</head>

<body>

<div class="container py-4">

    <div class="row g-4">

        <!-- =======================
     STUDENT INTERFACE
======================= -->
<div class="col-md-4">
    <div class="panel-box">

        <div class="header-box">
            MCC Registrar<br>Queueing System
        </div>

        <h5>Student Interface</h5>
        <hr>

        <h6>Login</h6>

        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Student ID">
            </div>

            <button class="btn btn-primary w-100">Login</button>

            <div class="text-center mt-2">
               
            </div>
        </form>

        <h6 class="mt-4">Dashboard</h6>

        <!-- NEW: Service Selection -->
        <div class="mb-3">
            <label class="fw-bold mb-2">Select Service</label>
            <select class="form-select">
                <option disabled selected>-- Choose a Service --</option>
                <option>Enrollment</option>
                <option>Clearance</option>
                <option>Request TOR</option>
                <option>Good Moral Certificate</option>
                <option>Certificate of Enrollment</option>
                <option>ID Request / Replacement</option>
                <option>Subject Adding / Dropping</option>
                <option>Document Verification</option>
                <option>Others</option>
            </select>
        </div>

        <button class="btn btn-primary w-100 mb-2">Request Queue Number</button>

        <p class="mb-0" style="font-size: 14px;">Estimated Waiting Time</p>
        <h4 class="fw-bold">10 minutes</h4>

    </div>
</div>


        <!-- =======================
     STAFF INTERFACE
======================= -->
<div class="col-md-4">
    <div class="panel-box">

        <div class="header-box">
            MCC Registrar<br>Queueing System
        </div>

        <h5>Staff Interface</h5>
        <hr>

        <h6>Staff Login</h6>

        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Username">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <button class="btn btn-primary w-100">Login</button>
        </form>

        <!-- =======================
             ADMIN PANEL
        ======================== -->
        <h6 class="mt-4">Admin Panel</h6>
        <hr>

        <!-- User Activation -->
        <label class="fw-bold">User Management</label>
        <div class="d-flex gap-2 mb-3">
            <button class="btn btn-success flex-fill">Activate User</button>
            <button class="btn btn-danger flex-fill">Deactivate User</button>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Enter Username">
        </div>

        <!-- Service Options -->
        <label class="fw-bold mt-3">Manage Services</label>
        <div class="mb-3">
            <select class="form-select">
                <option disabled selected>-- Select Action --</option>
                <option>Add New Service</option>
                <option>Remove Service</option>
                <option>Edit Service</option>
                <option>Enable / Disable Services</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Service Name">
        </div>

        <button class="btn btn-primary w-100 mb-3">Apply Changes</button>

        <!-- Queue Configuration -->
        <label class="fw-bold">Queue Settings</label>
        <div class="d-flex gap-2 mb-3">
            <button class="btn btn-warning flex-fill">Reset Queue</button>
            <button class="btn btn-secondary flex-fill">Pause Queue</button>
        </div>

        <!-- =======================
         END ADMIN PANEL
        ======================== -->


        <h6 class="mt-4">Queue Management</h6>

        <div class="d-flex gap-2 mb-3">
            <button class="btn btn-primary flex-fill">Call Next</button>
            <button class="btn btn-success flex-fill">Serve</button>
            <button class="btn btn-warning flex-fill">Skip</button>
        </div>

        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>Queue No.</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr><td>43</td><td>Served</td><td><button class="btn btn-primary btn-sm">Serve</button></td></tr>
                <tr><td>42</td><td>Serving</td><td><button class="btn btn-primary btn-sm">Serve</button></td></tr>
                <tr><td>41</td><td>Skipped</td><td><button class="btn btn-secondary btn-sm">Call Next</button></td></tr>
                <tr><td>40</td><td>Waiting</td><td><button class="btn btn-primary btn-sm">Serve</button></td></tr>
            </tbody>
        </table>

    </div>
</div>

        <!-- =======================
             MONITOR DISPLAY
        ======================== -->
        <div class="col-md-4">
            <div class="panel-box">

                <div class="header-box">
                    MCC Registrar<br>Queueing System
                </div>

                <h5>Monitor Display</h5>
                <hr>

                <div class="now-serving-box">
                    <h6>Now Serving:</h6>
                    <h1 class="fw-bold">43</h1>
                </div>

                <h6 class="text-center mt-4">Next In Line:</h6>

                <div class="d-flex justify-content-center mb-4">
                    <span class="next-number">40</span>
                    <span class="next-number">41</span>
                    <span class="next-number">42</span>
                </div>

                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Service</th>
                            <th>Counter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Registrar 1</td>
                            <td>Registrar 2</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

</body>
</html>
