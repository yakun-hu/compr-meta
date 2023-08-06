<form method="post"><input type="text" name="youtube_url" style="width:450px"> <-URL </input><input type="submit" value="Render"></form>
<body style="background-color:3C5977;color:FAF8D7">
<h3>Player:</h3>
<iframe width="800" height="512" src="https://www.youtube.com/embed/<?php echo $_GET["url"]; ?>"></iframe>
<!--Processor:--><?php if (isset($_POST["youtube_url"])) { strtok($_POST["youtube_url"], "=&"); $ID = strtok("=&"); header("Location: media-player.php?url=$ID"); }?>
<form target="_blank" method="post" action="media.player-search,redir.php"><input type="text" name="search_input" style="width:350px">视觉⬅️keywords <input type="submit" value="Search"><input type="checkbox" name="20_min" value="true">⬅️20+ min 
<select name="recency"><option value="any_time">Any_time</option><option value="24_hrs">24_hours</option><option value="This_week">This_week</option><option value="This_month">This_month</option></select></form>
</body>
<!-- test-URL http://compr-meta/testing-progress/DNS-testing/media-player.DNS-test.php --> 
<!-- notes: 
an ini-res,consilience<fbno>indiemonstrat' q.tum-E ratio corre+ w/ precision, <-> mat-sci, anutha-persvieww | Corre-inversely, q.tum-E incidence can be a measurement of precision<n-p>#quantumcomputing defd<ch-15>
-->
<!-- docs:
http://personal-dash/post.post-number.php?author=blind&post_ID=576
[Late.22-5th.28] media-player.php The header in this format: 
<?php if (isset($_POST["youtube_url"])) { strtok($_POST["youtube_url"], "=&"); $ID = strtok("=&"); header("Location: media-player.php?url=$ID"); }?> 
is func, but as 
<?php if (isset($_POST["youtube_url"])) { 
 if (str_contains($_POST["youtube_url"], "youtube.com")) {strtok($_POST["youtube_url"], "=&"); $ID = strtok("=&"); header("Location: media-player.php?url=$ID"); } 
 elseif (str_contains($_POST["youtube_url"], "youtu.be")) {$ID = substr($_POST["youtube_url"], 17, 11); header("Location: media-player.php?url=$ID"); } } ?> 
 updated to web, the header no longer works in DNS, but works on desktop-still #