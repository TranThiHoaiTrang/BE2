<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Lập trình backend-web 2</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/companies">Companies</a>
        <a class="p-2 text-dark" href="/trainers">Trainers</a>
        <a class="p-2 text-dark" href="/search">Search</a>

    </nav>

</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Companies</h1>

</div>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Web</th>
                <th scope="col">Phone</th>
                <th scope="col">Trainer_name</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo $company->company_id; ?></th>
                    <td><?php echo $company->company_name; ?></td>
                    <td><?php echo $company->company_web; ?></td>
                    <td><?php echo $company->company_phone; ?></td>
                    <td><?php echo $company->trainer_name; ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <?php echo $companies->render(); ?>

    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Companies</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of companies</a></li>

                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Trainers</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of trainers
                        </a></li>

                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>

                </ul>
            </div>
        </div>

    </footer>

</div>





</body></html>
<?php /**PATH D:\drive-download-20210426T000523Z-001\1-source\resources\views/companies.blade.php ENDPATH**/ ?>