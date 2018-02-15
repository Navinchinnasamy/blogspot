<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<?php require_once("header.php"); ?>

<body>

<!-- Container -->
<div id="container">

    <?php require_once("body_header.php"); ?>

    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Blog</h2>
                    <p>Blog Page</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="row blog-page">

                <!-- Start Blog Posts -->
                <div class="col-md-9 blog-box">

					<!--<div class="ads">
						<SCRIPT charset="utf-8" type="text/javascript" src="http://ws-in.amazon-adsystem.com/widgets/q?rt=tf_cw&ServiceVersion=20070822&MarketPlace=IN&ID=V20070822%2FIN%2Fnavin21594-21%2F8010%2F6dc1309c-cb65-4995-906f-455c41fe4008&Operation=GetScriptTemplate"> </SCRIPT> <NOSCRIPT><A rel="nofollow" HREF="http://ws-in.amazon-adsystem.com/widgets/q?rt=tf_cw&ServiceVersion=20070822&MarketPlace=IN&ID=V20070822%2FIN%2Fnavin21594-21%2F8010%2F6dc1309c-cb65-4995-906f-455c41fe4008&Operation=NoScript">Amazon.in Widgets</A></NOSCRIPT>
					</div>-->
                </div>
                <!-- End Blog Posts -->
                <?php include_once("blog_sidebar.php"); ?>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <?php require_once("footer.php"); ?>

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php require_once("switcher.php"); ?>

<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
    var count = 10, page = 1, fetchedAllPosts = false;
    $(function () {
        getAllPosts();

        /** >>> Get Posts on Scroll down (Lazy Loading effect)**/
        $(window).on("scroll", function () {
            if ($(window).scrollTop() == ($(document).height() - $(window).height() - 30) && !fetchedAllPosts) {
                getAllPosts();
            }
        });
        /** <<< Get Posts on Scroll down (Lazy Loading effect)**/
    });

    function getAllPosts() {
        $.ajax({
            type: "POST",
            url: "manage/post_handler.php",
            data: {
                "reqfor": "getAllPosts",
                "count": count,
                "page": page
            },
            success: function (ret) {
                page = page + 1;
                ret = JSON.parse(ret);
                if (ret.length < count) {
                    allPostsFetched = true;
                }
                $.each(ret, function (i, p) {
                    generateTemplate(p);
                });
            }
        });
    }

    function generateTemplate(post) {
        post.reqfor = "generateTemplete";
        $.ajax({
            type: "POST",
            url: "manage/post_handler.php",
            data: post,
            success: function (ret) {
                $("body").find(".blog-box").append(ret);
            }
        });
    }
</script>

</body>

</html>