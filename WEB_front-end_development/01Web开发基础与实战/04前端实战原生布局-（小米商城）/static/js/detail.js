$(function(){
	//默认选中第一个版本和第一个颜色
	$('.detail_much_left').eq(0).attr('class','detail_much_left checked');
	$('.detail_color_left').eq(0).attr('class','detail_color_left checked');
	//点击选中其他的颜色
	$('.detail_color_left').click(function(){
		$('.detail_color_left').attr('class','detail_color_left');
		$(this).attr('class','detail_color_left checked');
		updateTotalPrice();
	})
	$('.detail_much_left').click(function(){
		$('.detail_much_left').attr('class','detail_much_left');
		$(this).attr('class','detail_much_left checked');
		updateTotalPrice();
	})
	//选中选择小米提供的保障服务
	$('.shop_detail_bz1').click(function(){
		var nowcircleclass=$(this).find('.fa-check-circle').attr('class');
		var nowclass=$(this).find('.fa-check-square').attr('class');
		if(nowcircleclass.indexOf('checked')>0){
			//如果被选中，就除移选中
			nowcircleclass=nowcircleclass.replace('checked','');
			nowclass=nowclass.replace('checked','');
			$(this).find('.fa-check-circle').attr('class',nowcircleclass);
			$(this).find('.fa-check-square').attr('class',nowclass);
			$(this).find('.fa-check-circle').css({'background':'#fff','color':'rgb(0,0,0,0)','border':'1px solid #ccc'});
			$(this).find('.fa-check-square').css({'background':'#fff','color':'rgb(0,0,0,0)','border':'1px solid #ccc'});
		}else{
			//如果没有被选中，就选中
			$(this).find('.fa-check-circle').attr('class',nowcircleclass+'checked');
			$(this).find('.fa-check-square').attr('class',nowclass+'checked');

			$(this).find('.fa-check-circle').css({'background':'#fff','color':'rgb(255,103,0,1)','border':'1px solid #ff6700'});
			$(this).find('.fa-check-square').css({'background':'#fff','color':'rgb(255,103,0,1)','border':'1px solid #ff6700'});
		}
		updateTotalPrice();
	})

	//计算总价
	function updateTotalPrice(){
		//获取被选中的版本
		//var bbPrice=$(".detail_much_left[class$='checked']").find('span').attr('data-val')*1
		var bbPrice=$('.detail_much_left[class$="checked"]').find('span').attr('data-val')*1
		//获取服务价钱
		var svPrice=0;
		//var svSpan=$(".fa-check-circle[class$='checked']").parent('.shop_detail_bz1').find('span[data-val]')
		var svSpan=$('.fa-check-circle[class$="checked"]').parent('.shop_detail_bz1').find('span[data-val]')
		for(var i=0;i<svSpan.length;i++){
			svPrice+=svSpan[i].getAttribute('data-val')*1
		}
		var TotalPrice=bbPrice+svPrice;
		$('#totalPrice').html('总计&nbsp;:&nbsp;'+TotalPrice+'元');
		$('#phonePrice').html(bbPrice+'元');
	}
	
})