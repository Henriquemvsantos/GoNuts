<?php
$this->breadcrumbs=array(
	'Items',
);
$this->layout="";

$this->menu=array(
	array('label'=>'Create Items', 'url'=>array('create')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<div class="span-22 prepend-1 append-1">
<h1>Donuts</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'order-form',

	'action'=>'index.php?r=order/Userorder',
)); ?>

<div class="span-24" >
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));


 ?>
</div>

	<div class="row buttons span-24 prepend-bottom" align="center" >
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create Order' : 'Save',array('name'=>'submit')); 
		$this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Please order these for me',
		'type'=>'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'size'=>'large', // null, 'large', 'small' or 'mini'
		'htmlOptions'=>array(
			'name'=>'order',
			 'data-toggle'=>'modal',
			'data-target'=>'#myModal',
			'onClick'=>'AjaxUpdateOrder()',
			
			),
	));
	
	// $this->widget('bootstrap.widgets.TbButton', array(
    // 'label'=>'Click me',
    // 'type'=>'primary',
	// 'size'=>'large',
    // 'htmlOptions'=>array(
        // 'data-toggle'=>'modal',
        // 'data-target'=>'#myModal',
        // 'onClick'=>'AjaxUpdateOrder()',
		// // 'ajax' => array(
			// // 'type'=>'POST', //request type
			// // //'params'=>array('val'=>"fdfs"),
			// // 'data'=> array('val'=>"fdfs"),
			// // 'url'=>$this->createUrl('order/AjaxUpdateOrder',
                                                // // array('val'=>'js:$("#test").val()')), //url to call
			// // 'success'=>'function(data) { alert(data) }',// function to call onsuccess 
					 // // // "data" is returned data and function can be regular js or jQuery
			// // ),
    // ),
	
	
// )); 

	?>

	
	</div>
	
	<?php $this->endWidget(); ?>
	
<div class="span-24">
	<!--  Model Pop UP -->
	<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal','htmlOptions'=>array('class'=>'span-24'))); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Order Overview</h4>
</div>
 
<div class="modal-body" id="overview">
    <p>Ooops.. Something went wrong</p>
	<?php
	// $this->renderPartial('_summary', null, false, true);
	?>
</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>
<!-- End of Model Pop UP -->
</div>



</div>
<div id="lol">
</div>
<script>

// var item = {
    // itemId: null,
    // qty: null
// };


var orderItems = [ ];

<?php 
$itemModels = Items::getIAlltems();
$i = 0;
$len = count($itemModels);
foreach($itemModels as $itemModel){

	// //echo "'".$itemModel->item_id."'".":" ."'0'";
	// echo '"'.$itemModel->item_id.'":{"id":"'.$itemModel->item_id.'","name":"'.$itemModel->name.'","qty":"0"}';
		// if ($i != $len-1) {
			// echo ",";
		// }

	// $i++;

	echo "orderItems.push({'itemId': '$itemModel->item_id', 'itemName':'$itemModel->name','qty':'0'});";

}


 ?>
//document.getElementById('header').innerHTML =JSON.stringify(orderItems);
 
 
 //orderItems array {<item id> : {<name>,<quantity>}}


function updateItems(current,itemid,qty){
	//alert(itemid+"-"+qty);



	//alert(orderItems[itemid].qty);
	
	for (item in orderItems) { 
	//alert(qty);
		if(orderItems[item].itemId == itemid){
			if(qty == "more"){
				$('#qty_'+itemid).show();
				$('#qty_'+itemid).focus();
				if($('#qty_'+itemid).val()){
				orderItems[item].qty=$('#qty_'+itemid).val();
				}else{
				orderItems[item].qty=0;
				}
			}else if(qty == "none"){
				$('#qty_'+itemid).hide();
				orderItems[item].qty=0;

			}else{
				orderItems[item].qty=qty;
				$('#qty_'+itemid).hide();
			}
		
			break;
		}
		
		//return false;
	}

	// for (item in orderItems) { 
	
		// alert(orderItems[item].itemName+"-"+orderItems[item].qty);

	// }
	
	// var xmlhttp=null;
    // var xmlhttp = null;
    // if(typeof XMLHttpRequest != 'udefined'){
        // xmlhttp = new XMLHttpRequest();
    // }else if(typeof ActiveXObject != 'undefined'){
        // xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    // }else 
        // throw new Error('your browser doesnt support ajax');
            
    // xmlhttp.open('GET','AttractionsAjax.php?cityid='+cities[index],true);
	// //alert('AttractionsAjax.php?cityid='+cities[index]);
            
    // xmlhttp.onreadystatechange=function(){
        // //alert('ready'+xmlhttp.readyState);
        // if(xmlhttp.readyState==4){
            
            // document.getElementById('overview_things_city'+index).innerHTML  = xmlhttp.responseText;
        // }
    // };
     
    // xmlhttp.send(null);
}


function AjaxUpdateOrder(){

	var xmlhttp=null;
    var xmlhttp = null;
    if(typeof XMLHttpRequest != 'udefined'){
        xmlhttp = new XMLHttpRequest();
    }else if(typeof ActiveXObject != 'undefined'){
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }else 
        throw new Error('your browser doesnt support ajax');

	// for (item in orderItems) { 
	// alert(orderItems[item].name+"-"+orderItems[item].qty);

	// }
    xmlhttp.open('GET','index.php?r=order/AjaxUpdateOrder&orderItems='+JSON.stringify(orderItems),true);
	//alert('AttractionsAjax.php?cityid='+cities[index]);
            
    xmlhttp.onreadystatechange=function(){
        //alert('ready'+xmlhttp.readyState);
        if(xmlhttp.readyState==4){
         //   var output= xmlhttp.responseText.split ("[BRK]");
            document.getElementById('overview').innerHTML = xmlhttp.responseText;
          //alert(output[]);
        //  alert(xmlhttp.responseText);
        }
    };
     
    xmlhttp.send(null);
}



Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

var getKeys = function(obj){
   var keys = [];
   for(var key in obj){
      keys.push(key);
   }
   return keys;
}

</script>
