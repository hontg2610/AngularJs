<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/1.css">
</head>
<body ng-app="myApp" ng-controller="MyController">


	<div class="jumbotron ">
		<h1 class="display-4 text-xs-center">THỰC HÀNH VÒNG LẬP TRONG ANGULAR</h1>

		<div ng-repeat="motnguoi in nhieunguoi" ng-init="motnguoi.hienra=false">

			<div class="card sua" ng-show="motnguoi.hienra" >
				<div class="card-header">
					<b class="float-xs-right btn-danger"><i class="fa fa-check" ng-click="luudulieu(motnguoi)"></i></b>
					Thong tin ve <input type="text" class ="form-control" ng-model="motnguoi.ten">
				</div>
				<div class="card-body pl-2">
					<input type="hidden" class="form-control" ng-model="motnguoi.id">
					<b>Năm sinh : </b> <input type="text" class="form-control" ng-model="motnguoi.namsinh"> <br>
					<b>Facebook: </b> <input type="text" class="form-control" ng-model="motnguoi.facebook"> <br>
					<b>Điện thoại : </b> <input type="text" class="form-control" ng-model="motnguoi.sodienthoai"> <br>
					<!-- <b class="float-xs-right btn btn-outline-danger btn-block" >Luu </b> -->
				</div>
			</div>

			<div class="card hien" ng-show="!motnguoi.hienra">
				<div class="card-header">
					<b class="float-xs-right btn-primary"><i class="fa fa-pencil" ng-click="hienradi(motnguoi)"></i></b>
					Thong tin ve <b>{{motnguoi.ten}}</b>
				</div>
				<div class="card-body pl-2">
					<b>Năm sinh : </b> <i>{{motnguoi.namsinh}}</i> <br>
					<b>Facebook: </b> <i>{{motnguoi.facebook}}</i> <br>
					<b>Điện thoại : </b> <i>{{motnguoi.sodienthoai}}</i> <br>
				</div>
			</div>

		</div>		
	</div>


	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url(); ?>/1.js"></script>
</body>
</html>