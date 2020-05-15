 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope){
  
  	// $scope.hienthi = false;
  	// $scope.chuyenvesua =function(){
  	// 	$scope.hienthi = !$scope.hienthi;
  	// }

  	$scope.hienradi = function(motnguoi){
  		motnguoi.hienra = !motnguoi.hienra;
  	}


 	$scope.nhieunguoi = [
 		{
 			ten: "hon",
 			namsinh:"1992",
 			facebook: "fb.com/hontg",
 			dienthoai:"0903770501",
 		},
 		{
 			ten: "nam",
 			namsinh:"1998",
 			facebook: "fb.com/hontg",
 			dienthoai:"0903xx0501",
 		},
 		{
 			ten: "Tuan",
 			namsinh:"1980",
 			facebook: "fb.com/Tuan",
 			dienthoai:"090377xxxx",
 		},

 	]

 })