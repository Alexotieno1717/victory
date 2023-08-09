<!DOCTYPE html>
<html lang="en">
<?= require 'partials/head.php'?>
<body>

<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <?= require 'partials/side-bar.php'?>

    <!-- Navbar -->
    <?= require 'partials/nav-bar.php'?>
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 30px">
    <div class="container">

        <nav aria-label="breadcrumb" style="float: right; margin-right: 20px; font-size: small">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Victory farm</a></li>
                <li class="breadcrumb-item active" aria-current="page">lists</li>
            </ol>
        </nav>

        <!--Section: Tables -->
        <section>
            <div class="container">
                <table class="table">
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
                    <?php
                        $pos = 1;
                        foreach ($branches as $branch) : ?>
                        <tbody>
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
                        </tbody>
                    <?php $pos++; endforeach; ?>
                </table>
            </div>
        <!--Section: Tables -->
    </div>
</main>

<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</body>
</html>
