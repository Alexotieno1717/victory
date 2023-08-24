<!DOCTYPE html>
<html lang="en">
<?= include 'partials/head.php' ?>

<body>

<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <?= require 'partials/side-bar.php' ?>

    <!-- Navbar -->
    <?= require 'partials/nav-bar.php' ?>
</header>
<!--Main Navigation-->

<!-- Breadcrumb -->
<div class="container" style="margin-top: 30px">
    <nav aria-label="breadcrumb" style="float: right; margin-right: 15px; font-size: small">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Victory farm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ussd</li>
        </ol>
    </nav>
</div>

<!--Main layout-->
<main class="mt-5">
    <div class="container">
        <div style="margin: 29px;">
            <h3 class="pt-4">Filter Page</h3>
        </div>
    </div>

    <!--Section: Tables -->
    <section>
        <div class="container">
            <!--Filter: By Date Form -->
            <div class="container d-flex">
                <form class="form-inline  d-flex mt-3" method="POST" action="/search">
                    <div class="form-group ml-2">
                        <label for="Name2" class="">Ussd String: </label>
                        <input type="number" class="form-control" name="ussd_string" placeholder="ussd string" value="<?= $_POST['ussd_string'] ?: '' ?>" required />
                    </div>

                    <div class="form-group ml-2" style="margin-left: 10px">
                        <label for="Name2" class="">From: </label>
                        <input type="date" class="form-control" name="from" placeholder="to" value="<?= date('Y-m-d') ?>" min="2018-01-01" max="2099-12-31" required />
                    </div>

                    <div class="form-group" style="margin-left: 10px">
                        <label for="Email2" class="ml-2">To: </label>
                        <input class="form-control" type="date" name="to" placeholder="to" value="<?= date('Y-m-d') ?>" min="2018-01-01" max="2099-12-31" required />
                    </div>

                    <div class="form-group" style="margin-left: 10px;margin-top: 25px">
                        <button type="submit" class="btn btn-md ml- " style="background-color:#0c2f55"><span style="color:white">Search</span></button>
                        <button type="reset" class="btn btn-md btn-danger ml-2" name="extract" onclick="window.location.href='/filter'">Reset</button>
                    </div>
                </form>
            </div>
            <table id="studtable" class="table table-striped table-bordered" style="margin-top: 29px;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">MSISDN</th>
                    <th scope="col">SERVICE CODE</th>
                    <th scope="col">USSD STRING</th>
                    <th scope="col">DATE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $pos = 1;
                foreach ($ussd as $item) : ?>

                    <tr>
                        <th scope="row"><?= $pos ?></th>
                        <td><?= $item['MSISDN'] ?></td>
                        <td><?= $item['SERVICE_CODE'] ?></td>
                        <td><?= $item['USSD_STRING'] ?></td>
                        <td><?= $item['dateCreated'] ?></td>
                    </tr>

                    <?php $pos++;
                endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!--Section: Tables -->
</main>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#studtable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>