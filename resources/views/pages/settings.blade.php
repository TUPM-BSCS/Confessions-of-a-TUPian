@extends('app')

@section('content')

<head>
	<script src="{{ URL::asset('http://localhost/iConfess/resources/assets/js/jquery.js') }}"/></script>
	<script>
		$(document).ready(function(){
		    $(".settings-editbtn-cn").click(function(){
		    	$(".codenamediv").show("fast");
		    	$(".settings-editbtn-cn").hide();
		    });
		    $(".cancelcodename").click(function(){
		    	$(".settings-editbtn-cn").show();
		    	$(".codenamediv").hide("fast");
		    });

		    $(".settings-editbtn-pw").click(function(){
		    	$(".passworddiv").show("fast");
		    	$(".settings-editbtn-pw").hide();
		    });
		    $(".cancelpassword").click(function(){
		    	$(".settings-editbtn-pw").show();
		    	$(".passworddiv").hide("fast");
		    });
		});
	</script>
</head>

<body>


<div class="container-fluid">
	<div class="col-md-2 hidden-xs hidden-sm">
	</div>
	<div class="col-md-8">
		<h2>SETTINGS</h2>
		<div class="settingsdiv">
			<div class="settingsdivwrap">
				<div class="changedp">
					<form>
						<img src="" alt="D.P.">
						<button class="btn btn-primary btn-sm"> Save New Profile Picture</button>
					</form>
				</div>

				<br>

				<div class="settingsfield">
					<form>
						<table width="100%">

							<tr>
								<td width="15%">
									<b>Codename</b>
								</td>
								<td style="color: gray; text-align: center;" width="75%">
									<!-- insert retrieve name here-->
									Rushty Ben Vergara Baysantos
								</td>
								<td class="settings-editbtn-cn">
									<a class="settings-editbtn-cn">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
								</td>
							</tr>

						</table>
						<div class="codenamediv">
							<table class="table">
								<thead>
									<th>
										New Codename:
									</th>
									<th>
										<input type="text">
									</th>
								</thead>
							</table>
							<input class="btn btn-primary btn-sm" type="submit" name="savenewcodename">
							<button class="btn btn-default btn-sm cancelcodename" type="button">Cancel</button>
						</div>
					</form>
				</div>
				
				<div class="settingsfield">
					<form>
						<table width="100%">
							<tr>
								<td width="15%">
									<b>Passsword</b>
								</td>
								<td style="color: gray; text-align: center;" width="75%">
									<!-- insert retrieve name here-->
									You updated your password about a week ago, week ago
								</td>
								<td class="settings-editbtn-pw">
									<a class="settings-editbtn-pw">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
								</td>
							</tr>

						</table>

						<div class="passworddiv">
							<table class="table">

								<thead>
									<th>
										Old Password:
									</th>
									<th>
										<input type="text">
									</th>
								</thead>
								<thead>
									<th>
										New Password:
									</th>
									<th>
										<input type="text">
									</th>
								</thead>
								<thead>
									<th>
										Confirm New Password:
									</th>
									<th>
										<input type="text">
									</th>
								</thead>
							</table>
							<input class="btn btn-primary btn-sm" type="submit" name="savenewpassword">
							<button class="btn btn-default btn-sm cancelpassword" type="button">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>	

@endsection