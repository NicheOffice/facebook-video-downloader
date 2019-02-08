<?php
if ($_SESSION['type'] != "video" OR !filter_var($_SESSION['url'], FILTER_VALIDATE_URL)) {
    errorDialog($config["url"]);
    die();
}
?>
<section class="section">
    <div class="container text-center">
        <h1 class="display-1"><?php echo $config["title"]; ?></h1>
        <p class="lead"><?php echo $lang["homepage-slogan"]; ?></p>
    </div>
    <?php include("adcode.html"); ?>
    <div class="container text-center">
        <div class="card sec-pri-gradient text-white rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="lead"><?php echo $lang["preview"]; ?></p>
                        <div class="embed-responsive embed-responsive-4by3" style="margin-top:-10%;">
                            <?php echo '<video controls autoplay><source src="' . $_SESSION["url"] . '" type="video/mp4">Your browser does not support the HTML5 video.</video>'; ?>
                        </div>
                    </div>
                    <div class="col-md-8" id="download" style="margin-top:3%;">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <?php echo $lang["download-ready"]; ?>
                        </div>
                        <a class="btn btn-fill btn-lg btn-dark btn-block" href="<?php echo $_SESSION["url"]; ?>"
                           download>
                            <i class="fa fa-download"></i><?php echo $lang["download"]; ?>
                        </a>
                        <?php if (!empty($_SESSION['url-hd'])) { ?>
                            <a class="btn btn-fill btn-lg btn-dark btn-block" href="<?php echo $_SESSION["url-hd"]; ?>"
                               download>
                                <i class="fa fa-download"></i><?php echo $lang["download"]; ?> HD
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>