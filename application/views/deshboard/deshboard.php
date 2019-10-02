
	<?php
if($_SESSION['user_type']=='1'){
	echo '<script>
window.location = "'.$base_url.'/sale/salepic";
	</script>';
	}?>


<?php
if($_SESSION['user_type']=='2'){
		echo '<script>
window.location = "'.$base_url.'/warehouse/productlist";
	</script>';
	}
	?>

	<?php
	if($_SESSION['user_type']=='8'){
			echo '<script>
	window.location = "'.$base_url.'/warehouse/productlist_foranyone";
		</script>';
		}
		?>


		<?php
			if($_SESSION['user_type']=='9'){
					echo '<script>
			window.location = "'.$base_url.'/vendor/productlist";
				</script>';
				}
				?>


				<?php
				if($_SESSION['user_type']=='10'){
						echo '<script>
				window.location = "'.$base_url.'/warehouse/check_productlist_foranyone";
					</script>';
					}
					?>




<style type="text/css">
	body{
		background-color: #eee;
	}
</style>
<div class="container text-center" ng-app="firstapp" ng-controller="Index">

<div class="col-md-12">




<div class="col-md-7">

<div class="col-md-6">
<a style="text-decoration:none" href="<?php echo $base_url;?>/sale/salereportshift" title="<?=$lang_clickthissalesummary?>">
<div class="panel" style="height: 280px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<b><?=$lang_salewhatshif?> <?php if(isset($_SESSION['shift_id'])){ echo number_format($_SESSION['shift_id']);}else{ echo '('.$lang_notopenshif.')';} ?></b>
<br />
<h3 ng-repeat="x in saletoday">
	<?php echo $lang_qty;?>
	<b>{{x.sumnum | number}}</b>
	<br /><br />
	<?php echo $lang_income;?>
	<b>{{x.sumprice-x.sumdiscount | number:2}}</b>
</h3>



</div>
</a>
</div>


<div class="col-md-6">
<a style="text-decoration:none" href="<?php echo $base_url;?>/sale/salereport" title="<?=$lang_clickthissaleitem?>">
<div class="panel" style="text-align: left;height: 280px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<center><b><?=$lang_salegoodshif?> <?php if(isset($_SESSION['shift_id'])){ echo number_format($_SESSION['shift_id']);}else{ echo '('.$lang_notopenshif.')';} ?></b>

<table width="90%">
<tr ng-repeat="x in productsaletoday">
	<td>
	{{$index+1}}.	{{x.product_name}}
	</td>
<td align="right">
	{{x.product_numall | number}}
	</td>
</tr>

 </table>

</center>

</div>
</a>
</div>


<!-- <div class="col-md-4">
<a href="<?php echo $base_url;?>/sale/salecustomerreport" title="คลิกเพื่อดู ลูกค้าซื้อดี">
<div class="panel"  style="text-align: left;height: 240px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<center><b><?=$lang_cussaletoday?></b></center>
<table width="100%">

<?php
$i = 1;
foreach ($customersaletoday as $key => $value) {
	echo '<tr>';
	echo '<td>'.$i.'. '.$value['name'].'</td><td align="right">'.number_format($value['sumsale_num']).'</td>';
echo '</tr>';

$i++;
}
 ?>
 </table>
</div>
</a>
</div> -->



<div class="col-md-6">
<a style="text-decoration:none" href="<?php echo $base_url;?>/warehouse/stock" title="<?=$lang_clickthisstockall?>">
<div class="panel"  style="text-align: left;height: 280px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<center><b><?=$lang_productwillout?></b>

<table width="90%">
<tr ng-repeat="x in productoutofstock">
<td>{{$index+1}}. {{x.product_name}}</td>
<td align="right">{{x.product_stock_num | number}}</td>
</tr>

 </table>

 </center>

</div>
</a>
</div>




<div class="col-md-6">
<a style="text-decoration:none" href="<?php echo $base_url;?>/warehouse/dateend" title="<?=$lang_clickthisalllist?>">
<div class="panel"  style="text-align: left;height: 280px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<center><b><?=$lang_productenddate?></b>

<table width="90%">
<tr ng-repeat="x in productdateend">
	<td>
{{$index+1}}. {{x.lotno}}
	</td>
	<td ng-if="x.date_end2 < '<?php echo time();?>' >" align="right" style="color:red;">
{{x.date_end}}
	</td>
	<td ng-if="x.date_end2 > '<?php echo time();?>' >" align="right">
{{x.date_end}}
	</td>
</tr>

 </table>

 </center>

</div>
</a>
</div>





 <div class="col-md-12">
<a style="text-decoration:none" href="<?php echo $base_url;?>/pawn/pawnenddate" title="คลิกเพื่อดู สินค้ารับฝากเลยกำหนด ทั้งหมด">
<div class="panel"  style="text-align: left;height: 280px;background-color: rgba(0,0,0,.5);color: #fff;">
<br />
<center><b>สินค้ารับฝากเลยกำหนด</b>

<table width="90%">
<tr ng-repeat="x in productpawnenddate">
	<td>
		{{$index+1}}. {{x.product_name}}
	</td>
	<td align="right">
		{{x.end_date_date}}
	</td>
</tr>

 </table>

 </center>


</div>
</a>
</div>




</div>








<div class="col-md-5">

<a href="<?php echo $base_url;?>/sale/salepic" class="btn btn-success"  style="font-size: 18px;font-weight: bold; width: 340px;">
<span class="glyphicon glyphicon-blackboard" aria-hidden="true" style="font-size: 50px;"></span><br />

<?=$lang_salepic?>
</a>

<!-- <a href="<?php echo $base_url;?>/sale/salepage" class="btn btn-warning"  style="font-size: 18px;font-weight: bold; width: 170px;">
<span class="glyphicon glyphicon-record" aria-hidden="true" style="font-size: 50px;"></span><br /> <?=$lang_salelist?>
</a> -->



<p></p>

	 <a href="<?php echo $base_url;?>/sale/salebill" class="btn btn-primary"  style="font-size: 18px;font-weight: bold;width: 170px;">
<span class="glyphicon glyphicon-align-justify" aria-hidden="true" style="font-size: 50px;"></span><br />
<?=$lang_billreserv?>
</a>


<!--
<a href="<?php echo $base_url;?>/sale/product_return" class="btn btn-warning"  style="font-size: 18px;font-weight: bold; width: 170px;">
<span class="glyphicon glyphicon-refresh" aria-hidden="true" style="font-size: 50px;"></span><br /> <?=$lang_returnproduct?>
</a> -->

<a href="<?php echo $base_url;?>/warehouse/productlist" class="btn btn-primary"  style="font-size: 18px;font-weight: bold;width: 170px;">
<span class="glyphicon glyphicon-home" aria-hidden="true" style="font-size: 50px;"></span><br />
<?=$lang_productstock?>
</a>


<p></p>

<a class="btn btn-primary btn-lg" href="<?php echo $base_url;?>/warehouse/barcode_ds_full" style="font-size: 18px;font-weight: bold; width: 340px;">
<span class="glyphicon glyphicon-barcode" aria-hidden="true" style="font-size: 25px;"></span><br />
	สร้างบาร์โค้ด
</a>


<p></p>

<a href="<?php echo $base_url;?>/purchase/buy" class="btn btn-primary" style="font-size: 18px;font-weight: bold; width: 340px;">

<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="font-size: 50px;"></span><br /> จัดซื้อ

</a>
<p></p>


 <a href="<?php echo $base_url;?>/pawn/pawnlist" class="btn btn-primary"  style="font-size: 18px;font-weight: bold;width: 170px;">
<span class="glyphicon glyphicon-list" aria-hidden="true" style="font-size: 50px;"></span><br />
รับฝาก
</a>










<a href="<?php echo $base_url;?>/mycustomer" class="btn btn-primary" style="font-size: 18px;font-weight: bold; width: 170px;">
<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 50px;"></span><br />
<?=$lang_customer?>
</a>

<p></p>

<a href="<?php echo $base_url;?>/sale/salelist" class="btn btn-info"  style="font-size: 18px;font-weight: bold; width: 340px;">
<span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="font-size: 50px;"></span><br />
<?=$lang_salereport?>
</a>


<p></p>

<a href="<?php echo $base_url;?>/salesetting/discount" class="btn btn-danger"  style="font-size: 18px;font-weight: bold; width: 170px;">
<span class="glyphicon glyphicon-cog" aria-hidden="true" style="font-size: 50px;"></span><br />
<?=$lang_salesetting?>
</a>




<a href="<?php echo $base_url;?>/storemanager/user_owner" class="btn btn-default"  style="font-size: 18px;font-weight: bold; width: 85px;">
<span class="glyphicon glyphicon-cog" aria-hidden="true" style="font-size: 50px;"></span><br />
พนักงาน
</a>

<a href="<?php echo $base_url;?>/storemanager/brand" class="btn btn-default"  style="font-size: 18px;font-weight: bold; width: 85px;">
<span class="glyphicon glyphicon-cog" aria-hidden="true" style="font-size: 50px;"></span><br />
ร้าน
</a>

<!-- <a href="<?php echo $base_url;?>/marketing/email" class="btn btn-default"  style="font-size: 15px;font-weight: bold; width: 150px;" >
<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 50px;"></span><br /> <?=$lang_emailmarketting?>
</a> -->

<p></p>






<a href="<?php echo $base_url;?>/printer/printercategory" class="btn btn-default"  style="font-size: 18px;font-weight: bold; width: 340px;">
<span class="glyphicon glyphicon-print" aria-hidden="true" style="font-size: 25px;"></span><br />
ตั้งค่าใบเสร็จ
</a>

<p></p>

<a class="btn btn-default btn-lg" href="<?php echo $base_url;?>/home/showcus2mer" target="_blank" style="font-size: 18px;font-weight: bold; width: 340px;">
<span class="glyphicon glyphicon-blackboard" aria-hidden="true" style="font-size: 25px;"></span><br />
	<?=$lang_moniterforcus?>
</a>






</div>




<div class="col-md-12">
<center>



	<a href="<?php echo $base_url;?>/backup_all" class="btn btn-info"  style="font-size: 16px;font-weight: bold; width: 200px;border-radius: 20px;">
	<span class="glyphicon glyphicon-save" aria-hidden="true" style="font-size: 30px;"></span><br />
	Backup Database
	</a>


<br /><br />	



<a href="#" class="btn btn-danger" ng-click="Delsaleall()"  style="font-size: 16px;font-weight: bold; width: 200px;border-radius: 20px;">
	<span class="glyphicon glyphicon-remove" aria-hidden="true" style="font-size: 30px;"></span><br />
	ลบประวัติการขายทั้งหมด
	</a>



</center>
</div>








<div class="modal fade" id="Delsaleall">
	<div class="modal-dialog modal-xs">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">ลบประวัติการขายทั้งหมด</h4>
			</div>
			<div class="modal-body">
			<center>
<font style="color:red;">*** ประวัติการขายทั้งหมดจะหายไป ไม่สามารถนำกลับคืนมาได้ </font>
<br />
<a href="<?php echo $base_url;?>/c2mhelper/delsaleall" class="btn btn-success"  style="font-size: 16px;font-weight: bold; width: 200px;border-radius: 20px;">
	ยืนยัน
	</a>

</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>










</div>
</div>









<script>
var app = angular.module('firstapp', []);
app.controller('Index', function($scope,$http,$location) {


$scope.Saletoday = function(){

$http.get('Home/Saletoday')
		 .then(function(response){
				$scope.saletoday = response.data;

			});
 };
$scope.Saletoday();




$scope.Productsaletoday = function(){

$http.get('Home/Productsaletoday')
		 .then(function(response){
				$scope.productsaletoday = response.data;

			});
 };
$scope.Productsaletoday();


$scope.Productoutofstock = function(){

$http.get('Home/Productoutofstock')
		 .then(function(response){
				$scope.productoutofstock = response.data;

			});
 };
$scope.Productoutofstock();


$scope.Productdateend = function(){

$http.get('Home/Productdateend')
		 .then(function(response){
				$scope.productdateend = response.data;

			});
 };
$scope.Productdateend();


$scope.Productpawnenddate = function(){

$http.get('Home/Productpawnenddate')
		 .then(function(response){
				$scope.productpawnenddate = response.data;

			});
 };
$scope.Productpawnenddate();


$scope.Delsaleall = function(){

$('#Delsaleall').modal('show');
 };
 
 



});
	</script>
