<section class="section">
    <div class="container text-center">
        <h1 class="display-1"><?php echo $config["title"]; ?></h1>
        <p class="lead"><?php echo $lang["homepage-slogan"]; ?></p>
    </div>
    <?php include("adcode.html"); ?>
    <div class="container text-center">
        <div class="card sec-pri-gradient text-white rounded">
            <div class="card-body">
                <form method="post" action="system/action.php" enctype="multipart/form-data">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-video-camera"></i></span>
                        <input name="url" pattern="https?://.+" type="url" class="form-control" placeholder="<?php echo $lang["placeholder"]; ?>" required autocomplete="on" autofocus>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark"><i class="fa fa-download"></i> <?php echo $lang["download"]; ?></button>
                </form>
            </div>
        </div>
    </div>
</section>