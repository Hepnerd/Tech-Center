<?php
class layout
{
	public static function pageTop($title)
	{
		Echo <<<pageTop
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="../Assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../Assets/css/style.css"> <!-- Resource style -->
	<!--<link rel="stylesheet" href="../Assets/css/base.css"> <!-- Resource style -->
	<script src="../Assets/scripts/modernizr.js"></script> <!-- Modernizr -->
	<script src="../Assets/scripts/modernizr-custom.js"></script> <!-- Modernizr -->
	<script src="../Assets/scripts/jquery-2.1.1.js"></script> <!-- JQuery -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>$title</title>
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>
<body>

<div id="wrapper">



<div id="main">
<header>
    <div class="container">
        <div id="nav-trigger">
            <span>Menu</span>
        </div>
        <nav id="nav-main">
            <ul>
                <li><a href="">Events</a></li>
                <li><a href="">How-To</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Tutorials</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
        <nav id="nav-mobile"></nav>
    </div>
	</header>


pageTop;
	}
		public static function pageBottom()
	{
		Echo <<<pageBottom
			</div><!-- #main -->

</div><!-- /#wrapper -->

	<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>

</body>
</html>
pageBottom;
	}
}