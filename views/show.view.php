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
        <a href="/" style="margin-left: 50px;">Go Back</a>

        <nav aria-label="breadcrumb" style="float: right; margin-right: 20px; font-size: small">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Victory farm</a></li>
                <li class="breadcrumb-item active" aria-current="page">create</li>
            </ol>
        </nav>


        <!--Section: Create Form -->
        <section>


            <div class="container col-md-11 pt-5">
                <h3 class="pb-4">Single Branch</h3>
                <div>
                    <h4>Branch : <?= htmlspecialchars($branch['branch']) ?></h4>
                    <h6>Contact : <?= htmlspecialchars($branch['contact']) ?></h6>
                    <h6>County : <?= htmlspecialchars($branch['county']) ?></h6>
                    <p>Sub_county : <?= htmlspecialchars($branch['sub_county']) ?></p>
                </div>

                <div class="d-flex mt-3">
                    <div>
                        <a href="branch/edit?id=<?= $branch['id'] ?>" class="btn btn-dark btn-sm mr-3">Edit Branch</a>
                    </div>

                    <div style="margin-left: 10px">
                        <form method="POST" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $branch['id'] ?>">
                            <button class="btn btn-danger btn-sm">Delete Branch</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--Section: Create Form -->
    </div>
</main>

<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</body>
</html>
