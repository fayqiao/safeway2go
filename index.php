<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Safe Way 2 Go</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--
<script src="script/moment.js"></script>

<script src="script/bootstrap-datetimepicker.min.js"></script>
-->

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>

<script src="script/script.js"></script>

<script src="script/fakeLoader.min.js"></script>

<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/loading.css">

<link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,300italic,300' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="fakeLoader"></div>
<div id="bodyFrame" class="col-lg-12">
	<div id="header" class="col-lg-12">
		<div id="logo" class="col-lg-6">
			<a href="http://safeway2go.hippocreative.com.au/index.php">
				<img src="images/logo_2.png" alt="safe way 2 go" />
			</a>
		</div>
		<div id="poweredLogo" class="col-lg-6">
			<a href="http://hippocreative.com.au/index.php" target="_blank">
				<img src="images/Hippo_Creative1.png" alt="Hippo_Creative1" />
			</a>
		</div>
	</div>
	<div id="mainFrame">
		<div id="mapArea" class="col-lg-6">
			<div id="map_1">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52337.53767267421!2d138.63672362675783!3d-34.92912662180098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1435983364135" width="908" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="route_1" class="hiden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d13080.847840415274!2d138.58412421654964!3d-34.95129578888148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ab0cefe0eb5c7f5%3A0x6e6b7debc62b57d!2s99+King+William+Rd%2C+Goodwood+SA+5034!3m2!1d-34.9497041!2d138.59967029999999!4m5!1s0x6ab0cfa878db1d25%3A0xc831b327840266b4!2sGoodwood+Primary+School%2C+Goodwood+Road%2C+Goodwood%2C+South+Australia!3m2!1d-34.951508!2d138.588912!5e0!3m2!1sen!2sau!4v1436021489497" width="908" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="route_2" class="hiden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6540.477233790105!2d138.59198054065763!3d-34.950627572045136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ab0cefe0eb5c7f5%3A0x6e6b7debc62b57d!2s99+King+William+Rd%2C+Goodwood+SA+5034!3m2!1d-34.9497041!2d138.59967029999999!4m5!1s0x6ab0cfa878db1d25%3A0xc831b327840266b4!2sGoodwood+Primary+School%2C+Goodwood+Road%2C+Goodwood%2C+South+Australia!3m2!1d-34.951508!2d138.588912!5e0!3m2!1sen!2sau!4v1436021599525" width="908" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="route_3" class="hiden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6540.477233790105!2d138.59198054065763!3d-34.950627572045136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x6ab0cefe0eb5c7f5%3A0x6e6b7debc62b57d!2s99+King+William+Rd%2C+Goodwood+SA+5034!3m2!1d-34.9497041!2d138.59967029999999!4m5!1s0x6ab0cfa878db1d25%3A0xc831b327840266b4!2sGoodwood+Primary+School%2C+Goodwood+Road%2C+Goodwood%2C+South+Australia!3m2!1d-34.951508!2d138.588912!5e0!3m2!1sen!2sau!4v1436021618141" width="908" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div id="floatingCard">
			<div id="planningFrame">
				<form name="routePlanner" class="form-group">
					<h4>Plan Journey</h4>
					<p>
						<input type="text" class="form-control" id="exampleInputText1" placeholder="Choose starting point ...">
					</p>
					<p>
						<input type="text" class="form-control" id="exampleInputText2" placeholder="Choose destination ...">
					</p>
					<p>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1_1" value="option1"> Depart
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1_2" value="option2"> Arrive
						</label>
					</p>
					<p class='input-group date' id='datetimepicker1'>
		                <input type='text' class="form-control" placeholder="Depart/Arrive Time ..." />
		                <span class="input-group-addon">
		                    <span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </p>
					<p>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptionsW" id="inlineRadio2_1" value="option1"> Walking
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptionsW" id="inlineRadio2_2" value="option2"> Cycling
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptionsW" id="inlineRadio2_3" value="option2"> School bus
						</label>
					</p>
					<p>
						<a href="javascript:void(0)" onclick="planJourney()" class="btn btn-default floatRight">Plan Journey</a>
					</p>
				</form>
			</div>
			<div id="shortPlanningFrame" class="hiden">
				<p>
					From: <strong>99 King William Road, Goodwood SA</strong>
					<br/>
					To: <strong>Goodwood Primary School</strong>
				</p>
				<p>
					<small><em>Depart: 7:45am 5th July 2015 / Walking</em></small>
				</p>
				<p>
					<hr/>
				</p>
			</div>
			<div id="resultFrame" class="hiden">
				<p class="resultList">
					<strong><a href="javascript:void(0)" onclick="route(1)">via Albert St</a></strong>
					<span class="rate"><img src="images/1heart.png" alt="three heart"></span>
				</p>
				<p>
					<small><em>14 min / 1.2 Km</em></small>
				</p>
				<p><hr/></p>
				<p class="resultList">
					<strong><a href="javascript:void(0)" onclick="route(2)">via Florence St</a></strong>
					<span class="rate"><img src="images/2heart.png" alt="three heart"></span>
				</p>
				<p>
					<small><em>13 min / 1.1 Km</em></small>
				</p>
				<p><hr/></p>
				<p class="resultList">
					<strong><a href="javascript:void(0)" onclick="route(3)">via Lily St</a></strong>
					<span class="rate"><img src="images/3heart.png" alt="three heart"></span>
				</p>
				<p>
					<small><em>15 min / 1.3 Km</em></small>
				</p>
				<p><hr/></p>
			</div>
		</div>
		<div id="tripDetail" class="col-lg-3">
			<div class="tripDetailHeading">
				<h3><span><img src="images/map63.png" alt="route" height="24px;" width="24px;"></span>&nbsp;Route Info</h3>
				<p><hr/></p>
			</div>
			<div id="routeDetail_1" class="hiden">
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Walk north on King William Rd towards Albert St&nbsp;-&nbsp;<small><em>53 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Albert St&nbsp;-&nbsp;<small><em>850 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Slight left to stay on Albert St&nbsp;-&nbsp;<small><em>16 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Continue straight onto Railway Terrace S&nbsp;-&nbsp;<small><em>40 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Goodwood Rd&nbsp;-&nbsp;<small><em>40 m</em></small>
				</p>
				<p><hr/></p>
			</div>
			<div id="routeDetail_2" class="hiden">
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Walk south on King William Rd towards Union St&nbsp;-&nbsp;<small><em>58 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Union St&nbsp;-&nbsp;<small><em>240 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Weller St&nbsp;-&nbsp;<small><em>25 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Owen St&nbsp;-&nbsp;<small><em>260 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Hardy St&nbsp;-&nbsp;<small><em>29 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left towards Florence St&nbsp;-&nbsp;<small><em>427 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Goodwood Rd&nbsp;-&nbsp;<small><em>110 m</em></small>
				</p>
				<p><hr/></p>
			</div>
			<div id="routeDetail_3" class="hiden">
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Walk south on King William Rd towards Union St&nbsp;-&nbsp;<small><em>58 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Union St&nbsp;-&nbsp;<small><em>240 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Weller St&nbsp;-&nbsp;<small><em>61 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Gurr St&nbsp;-&nbsp;<small><em>260 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn left onto Hardy St&nbsp;-&nbsp;<small><em>78 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Lily St&nbsp;-&nbsp;<small><em>400 m</em></small>
				</p>
				<p><hr/></p>
				<p>
					<span><img src="images/point.png" title="point" alt="point"></span>
					&nbsp;Turn right onto Goodwood Rd&nbsp;-&nbsp;<small><em>60 m</em></small>
				</p>
				<p><hr/></p>
			</div>
			<div id="tips" class="hiden">
				<h3><span><img src="images/left203.png" alt="tips" height="24px;" width="24px;"></span>&nbsp;tips</h3>
				<p><hr/></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;66% route has <strong><em>walking trail</em></strong> or <strong><em>footpath</em></strong></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;55% route has <strong><em>bike paths</em></strong></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;85% road crossing has <strong><em>traffic signals</em></strong></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;58% route in the <strong><em>residential area (40km Zone)</em></strong></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;31% route in the <strong><em>residential area (50km Zone)</em></strong></p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;58% route do not have road accident in past 12 months</p>
				<p><span><img src="images/lightbulb16.png" title="lightbulb" alt="lightbulb" width="20px" height="20px"></span>&nbsp;The closest <strong><em>bike rack</em></strong> is only 50 meters away.</p>
			</div>
		</div>
		<div id="suggestions" class="col-lg-3">
			<div id="suggestionsHeading">
				<h3><span><img src="images/alert5.png" alt="diduknow" height="24px;" width="24px;"></span>&nbsp;Did you know</h3>
				<p><hr/></p>
			</div>
			<div id="suggestionDetail" class="hiden">
				<h4><span><img src="images/dollar165.png" alt="dollar" height="22px;" width="22px;"></span>&nbsp;Save money</h4>
				<p><span><img src="images/car135.png" alt="car" height="50px;" width="50px;"></span>&nbsp;&nbsp;You save $5.12 compare with <strong><em>driving</em></strong></p>
				<p><span><img src="images/bus39.png" alt="bus" height="50px;" width="50px;"></span>&nbsp;&nbsp;You save $3.48 compare with <strong><em>public transport</strong></em></p>
				<p><hr/></p>
				
				<h4><span><img src="images/gym8.png" alt="Calorie burned" height="22px;" width="22px;"></span>&nbsp;Calorie consumed</h4>
				<p>You burned <strong>121</strong> calories, which is equals:</p>
				<p>
					<span><img src="images/food32.png" alt="food" height="50px;" width="50px;"></span>&nbsp;&nbsp;+&nbsp;&nbsp;
					<span><img src="images/food33.png" alt="food" height="50px;" width="50px;"></span>&nbsp;&nbsp;or&nbsp;&nbsp;
					<span><img src="images/burger12.png" alt="burger" height="50px;" width="50px;"></span>&nbsp;&nbsp;+&nbsp;&nbsp;
					<span><img src="images/fried5.png" alt="chips" height="50px;" width="50px;"></span>&nbsp;&nbsp;+&nbsp;&nbsp;
					<span><img src="images/beer13.png" alt="beer" height="50px;" width="50px;"></span>
				</p>
				<p><hr/></p>
				
				<h4><span><img src="images/alarm47.png" alt="Travel time" height="22px;" width="22px;"></span>&nbsp;Travel time</h4>
				<p><span><img src="images/car135.png" alt="car" height="50px;" width="50px;"></span>&nbsp;&nbsp;You spend only <strong>10</strong> mins more than <strong><em>driving</em></strong></p>
				<p><span><img src="images/bus39.png" alt="bus" height="50px;" width="50px;"></span>&nbsp;&nbsp;You spend only <strong>2</strong> mins more than <strong><em>public transport</strong></em></p>
				<p><hr/></p>
				
				<h4><span><img src="images/leaf37.png" alt="carbon dioxide emissions" height="22px;" width="22px;"></span>&nbsp;Reduce carbon dioxide emissions</h4>
				<p><span><img src="images/car135.png" alt="car" height="50px;" width="50px;"></span>&nbsp;&nbsp;You reduced <strong>0.52</strong> litre CO2 compare with <strong><em>driving</em></strong></p>
				<p><span><img src="images/bus39.png" alt="bus" height="50px;" width="50px;"></span>&nbsp;&nbsp;You reduced <strong>0.21</strong> litre CO2 compare with <strong><em>public transport</strong></em></p>
				<p><hr/></p>
			</div>
		</div>
	</div>
	<div id="footer" class="col-lg-12">
		<p>
			© 2015 <a href="http://safeway2go.hippocreative.com.au/index.php" target="_blank" title="SafeWay2Go">SafeWay2Go</a> | Powered by <a href="http://hippocreative.com.au/" target="_blank" title="Hippo Creative">Hippo Creative</a>
		</p>
	</div>
</div>
</body>
</html>
