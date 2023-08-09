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
                <li class="breadcrumb-item active" aria-current="page">create</li>
            </ol>
        </nav>


        <!--Section: Create Form -->
        <section>

            <a href="/" class="pl-5 ml-5">Go Back</a>
            <div class="container col-md-11 pt-5">
                <h3 class="pb-4">Edit Branch</h3>
                <form method="POST" action="/branch/update">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="<?= $branch['id'] ?>">

                    <!-- Branch input -->
                    <div class="form-outline mt-4">
                        <input
                            type="text"
                            id="form1Example1"
                            name="branch"
                            class="form-control"
                            value="<?= $branch['branch'] ?>"
                            required />
                        <label class="form-label" for="form1Example1">Branch</label>
                    </div>
                    <?php if (isset($errors['branch'])) : ?>
                        <p style="color: #DB504A"><?= $errors['branch'] ?></p>
                    <?php endif; ?>

                    <!-- Contact input -->
                    <div class="form-outline mt-4">
                        <input type="number"
                               name="contact"
                               id="form1Example1"
                               value="<?= $branch['contact'] ?>"
                               class="form-control" required />
                        <label class="form-label" for="form1Example1">Contact</label>
                    </div>
                    <?php if (isset($errors['contact'])) : ?>
                        <p style="color: #DB504A"><?= $errors['contact'] ?></p>
                    <?php endif; ?>

                    <!-- Sub-county input -->
                    <div class="form-outline mt-4">
                        <input type="text" name="sub_county"
                               id="form1Example1"
                               value="<?= $branch['sub_county'] ?>"
                               class="form-control" />
                        <label class="form-label" for="form1Example1">Sub-county</label>
                    </div>
                    <?php if (isset($errors['sub_county'])) : ?>
                        <p style="color: #DB504A"><?= $errors['sub_county'] ?></p>
                    <?php endif; ?>

                    <!-- County input -->
                    <div>
                        <label class="form-outline mt-4">
                            <select class="form-control custom-select" name="county" style="border: 1px solid lightgrey" required>
                                <option selected disabled></option>
                                <?php
                                foreach ($counties as $county) : ?>
                                    <option value="<?= $county['name'] ?>" required><?= $county['name'] ?></option>

                                <?php
                                endforeach; ?>
                            </select>
                        </label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mt-4">Update Branch</button>

                </form>
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
