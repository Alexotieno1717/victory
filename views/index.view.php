<!DOCTYPE html>
<html lang="en">
<?= require 'partials/head.php' ?>

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
                <li class="breadcrumb-item active" aria-current="page">lists</li>
            </ol>
        </nav>
    </div>

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!-- <nav aria-label="breadcrumb" style="float: right; margin-right: 20px; font-size: small">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Victory farm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">lists</li>
                </ol>
            </nav> -->

            <div style="margin: 29px;">
                <h3 class="pt-4">Victory Farm Branches List</h3>
            </div>

            <!--Section: Tables -->
            <section>
                <div class="container">
                    <table id="studtable" class="table table-striped table-bordered p-3" style="margin-top: 29px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Contact</th>
                                <th scope="col">County</th>
                                <th scope="col">Sub_county</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pos = 1;
                            foreach ($branches as $branch) : ?>

                                <tr>
                                    <th scope="row"><?= $pos ?></th>
                                    <td><?= $branch['branch'] ?></td>
                                    <td><?= $branch['contact'] ?></td>
                                    <td><?= $branch['county'] ?></td>
                                    <td><?= $branch['sub_county'] ?></td>
                                    <td>
                                        <a href="/branch?id=<?php echo  $branch['id']; ?>" class="btn btn-success btn-sm"> <i class="fas fa-eye mr-1"></i> view</a>
                                    </td>
                                </tr>

                            <?php $pos++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!--Section: Tables -->
        </div>
    </main>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#studtable').DataTable();
        });
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>