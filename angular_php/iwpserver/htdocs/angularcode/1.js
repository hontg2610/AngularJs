 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope,$http){
  
  	// $scope.hienthi = false;
  	// $scope.chuyenvesua =function(){
  	// 	$scope.hienthi = !$scope.hienthi;
  	// }

  	$scope.hienradi = function(motnguoi){
  		motnguoi.hienra = !motnguoi.hienra;
  	}

  	$http.get("http://127.0.0.1:4001/angularcode/index.php/welcome/laydulieu")
  	.then(function(res) {
  		// console.log(res.data);
  		$scope.nhieunguoi = res.data;
  	});

    $scope.luudulieu = function(nguoi) {
      nguoi.hienra = !nguoi.hienra; 
      var data = $.param({
        id : nguoi.id,
        facebook : nguoi.facebook,
        sodienthoai : nguoi.sodienthoai,
        namsinh : nguoi.namsinh,
        ten : nguoi.ten
      }); 

      var config = {
        headers :{
          'content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
        }
      }

      $http.post('http://127.0.0.1:4001/angularcode/index.php/welcome/luudulieu', data, config).then(function(res) {
        if(res.data== "thanhcong"){
          console.log("cap nhat thanh cong");
        }
      }, function(res) {
        if(res.data=="thatbai"){
          console.log("cap nhat that bai");
        };
      });

    }
 	// $scope.nhieunguoi = [
 	// 	{
 	// 		ten: "hon",
 	// 		namsinh:"1992",
 	// 		facebook: "fb.com/hontg",
 	// 		dienthoai:"0903770501",
 	// 	},
 	// 	{
 	// 		ten: "nam",
 	// 		namsinh:"1998",
 	// 		facebook: "fb.com/hontg",
 	// 		dienthoai:"0903xx0501",
 	// 	},
 	// 	{
 	// 		ten: "Tuan",
 	// 		namsinh:"1980",
 	// 		facebook: "fb.com/Tuan",
 	// 		dienthoai:"090377xxxx",
 	// 	},

 	// ]

 })