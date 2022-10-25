
<?php
include "database.php";


//Download handler
if (isset($_POST['btn-download'])) {
	$id = $_POST['music'];
	$sql = "SELECT * FROM tbl_songs WHERE songID='$id'"; //Get music details from database
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		//Increase downloads (Counter)
		$sql = "UPDATE tbl_songs SET songDownloads=songDownloads+1 WHERE songID='$id'";
		$conn->query($sql);# downloads

		//Forec PHP file download
		$file_name = $row['songFile'];
		$file_url = 'uploads/audio/' . $file_name;
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"".$file_name."\""); 

		if (readfile($file_url)){
			?>
			<script>
				window.location.href='download.php?music=<?php echo $id;?>';
			</script>
			<?php
		}
		exit;#File download
	}
}

//Add like on button click
if (isset($_POST['btn-like'])) {
	$id = $_POST['music'];
	$sql = "UPDATE tbl_songs SET songLike=songLike+1 WHERE songID='$id'";
	if ($conn->query($sql) === TRUE) {
			?>
			<script>
				window.location.href='download.php?music=<?php echo $id;?>';
			</script>
			<?php
	}
}

//Add dislike on button click
if (isset($_POST['btn-dislike'])) {
	$id = $_POST['music'];
	$sql = "UPDATE tbl_songs SET songDislikes=songDislikes+1 WHERE songID='$id'";
	if ($conn->query($sql) === TRUE) {
			?>
			<script>
				window.location.href='download.php?music=<?php echo $id;?>';
			</script>
			<?php
	}
}
if (isset($_GET['music'])){
	$id = $_GET['music'];
	$sql = "SELECT * FROM tbl_songs WHERE songID='$id'";
	$result = $conn->query($sql);
	include"function.time-ago.php";
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		$view = "UPDATE tbl_songs SET songViews=songViews+1 WHERE songID='$id'";
		$conn->query($view);
	}else{

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Responsive meta tag-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>sound  <?php echo $row['songName'];?> || download</title>

	<!--Style sheets-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">


	<!--Font icons-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

	<!-- Jplayer-->
	<link href="jplayer/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jplayer/lib/jquery.min.js"></script>
	<script type="text/javascript" src="jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function(){

		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					title: "<?php echo $row['songName'].' - '.$row['songArtist'];?>",
					m4a: "uploads/audio/<?php echo $row['songFile'];?>",
					oga: "uploads/audio/<?php echo $row['songFile'];?>"
				});
			},
			swfPath: "jplayer/dist/jplayer",
			supplied: "m4a, oga",
			wmode: "window",
			useStateClassSkin: true,
			autoBlur: false,
			smoothPlayBar: true,
			keyEnabled: true,
			remainingDuration: true,
			toggleDuration: true
		});
	});
	//]]>
	</script>
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6005a45cd6f99f0018f9aba3&product=sop' async='async'></script>
</head>
<body>

	

	<!--Main Container-->
	<div class="container">
		<div class="card">
			<center><h3 class="text-primary">استمع إلى  [<?php echo $row['songName']." by ".$row['songArtist'];?>] </h3></center>
			<hr />
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<img src="uploads/cover/<?php echo $row['songCover'];?>" width="100%">
					<div id="jquery_jplayer_1" class="jp-jplayer"></div>
					<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
						<div class="jp-type-single">
							<div class="jp-gui jp-interface">
								<div class="jp-controls">
									<button class="jp-play" role="button" tabindex="0">play</button>
									<button class="jp-stop" role="button" tabindex="0">stop</button>
								</div>
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
								<div class="jp-volume-controls">
									<button class="jp-mute" role="button" tabindex="0">mute</button>
									<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
									<div class="jp-volume-bar">
										<div class="jp-volume-bar-value"></div>
									</div>
								</div>
								<div class="jp-time-holder">
									<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
									<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
									<div class="jp-toggles">
										<button class="jp-repeat" role="button" tabindex="0">repeat</button>
									</div>
								</div>
							</div>
							<div class="jp-details">
								<div class="jp-title" aria-label="title">&nbsp;</div>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12">
					<!-- <h4 class="text-muted">تفاصيل المحتوى</h4>
					<hr />
					<p><b>الاسم: </b><span style="float: right;"><?php echo $row['songName'];?></span></p>
					<hr /> -->
					<center>
						<form method="post" class="justify-content-center">
							<input type="hidden" name="music" value="<?php echo $row['songID'];?>">
							<button type="submit" class="btn btn-success" name="btn-download" title="استمع إلى <?php echo $row['songName'];?>"><i class="fa fa-download"></i> | <?php echo number_format($row['songDownloads'],0,'.',',');?></button>
						</form>
					</center>
					<br>
				</div>
			</div>
		</div>
	</div>
<script>
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>
<!-- Core javascript files-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>