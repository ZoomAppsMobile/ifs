$(".modal2").each( function(){  
	$(this).wrap('<div class="overlay"></div>')
});


    
 function oclise(modal) {
      
	 
	var $this = $(this);
	  
	$(modal).removeClass("open"); 
     
	setTimeout( function(){	
		$(".overlay").removeClass("open-modal");
		$(".overlay").removeClass("open");
	}, 150);
     
       
 }

$(".close-modal").on('click', function(e){  
	e.preventDefault();
	e.stopImmediatePropagation;  
	 
	var $this = $(this),
			modal = $($this).data("modal");
	  
	$(modal).removeClass("open");
	setTimeout( function(){	
		$(modal).parents(".overlay").removeClass("open-modal");
		$(modal).parents(".overlay").removeClass("open");
	}, 150);
	 
});

$(".open-modal").on('click', function(e){    
	e.preventDefault();
	e.stopImmediatePropagation;
	
	var $this = $(this),
			modal = $($this).data("modal");
				
	if(modal=="#modal7" || modal=="#modal71" || modal=="#modal72" || modal=="#modal73" || modal=="#modal74" || modal=="#modal75" || modal=="#modal76" || modal=="#modal777") {
		
		var id = $(this).attr('data-id');
        
		/*
		$('#modal2').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal22').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal221').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal222').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal223').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal224').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal225').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
		$('#modal226').append('<div class="load-4" style="position:absolute;left:0;top:0;background:rgba(255, 255, 255, 0.6);width:100%;height:100%;"><div class="ring-1" style="position:absolute;top:50%;left:50%;margin-left:-20px;margin-top:-20px;"></div></div>');
	 */
        
		$.ajax({
			type: 'POST',
			url: '/api/page/' + id,
			data: "id=" + id, 
			success: function(result) {
			
				var obj = JSON.parse(result);
			
				$(".overlay").removeClass("open");
				/*
				$('#modal2 .load-4').remove();
				$('#modal22 .load-4').remove();
				$('#modal221 .load-4').remove();
				$('#modal222 .load-4').remove();
				$('#modal223 .load-4').remove();
				$('#modal224 .load-4').remove();
				$('#modal225 .load-4').remove();
				$('#modal226 .load-4').remove();
				  
				$('#modal7 .title').html(obj[0].name);
				$('#modal7 .content > div').html(obj[0].content); 
				$('#modal71 .title').html(obj[0].name);
				$('#modal71 .content > div').html(obj[0].content); 
				$('#modal72 .title').html(obj[0].name);
				$('#modal72 .content > div').html(obj[0].content); 
				$('#modal73 .title').html(obj[0].name);
				$('#modal73 .content > div').html(obj[0].content); 
				$('#modal74 .title').html(obj[0].name);
				$('#modal74 .content > div').html(obj[0].content); 
				$('#modal75 .title').html(obj[0].name);
				$('#modal75 .content > div').html(obj[0].content); 
				$('#modal76 .title').html(obj[0].name);
				$('#modal76 .content > div').html(obj[0].content); 
				$('#modal777 .title').html(obj[0].name);
				$('#modal777 .content > div').html(obj[0].content); 
				*/
			$(modal).parents(".overlay").addClass("open open-modal");
			$(modal).parents(".overlay").attr("onclick", "oclise()");
			 
			/*
			$(modal).parents(".overlay").attr("data-modal", "#modal2");
			$(modal).parents(".overlay").attr("data-modal", "#modal22");
			$(modal).parents(".overlay").attr("data-modal", "#modal221");
			$(modal).parents(".overlay").attr("data-modal", "#modal222");
			$(modal).parents(".overlay").attr("data-modal", "#modal223");
			$(modal).parents(".overlay").attr("data-modal", "#modal224");
			$(modal).parents(".overlay").attr("data-modal", "#modal225");
			$(modal).parents(".overlay").attr("data-modal", "#modal226");
			*/
			
			setTimeout( function(){
				
				$(modal).addClass("open");
				
			}, 150);
					
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('request failed :'+textStatus+' '+jqXHR+' '+errorThrown);
			}
		}); 

	return false;
	
	}else{
	
	$(".overlay").removeClass("open-modal");	
	$(".overlay").removeClass("open");	
	
	}

	if(modal=="#modal22") { 
		var price = $($this).attr('data-price');
		
			$($this).addClass('buy_new');
	}
	
	if(modal=="#buy") {  
	
		var price = $($this).attr('data-price'),
			id = $($this).attr('data-id'),
			lang = $($this).attr('data-lang');
		
		$(".paybox").attr('data-id', id); 
		$(".paybox").attr('data-price', price); 
		$(".paybox").attr('data-lang', lang); 

	}		
	/*
	if(modal=="#buy1") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	if(modal=="#buy2") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	if(modal=="#buy3") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	if(modal=="#buy4") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	if(modal=="#buy5") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	if(modal=="#buy6") { var price = $($this).attr('data-price'), id = $($this).attr('data-id'); cart.add('', id, price); }
	 */
	if($($this).attr('data-price')) {
		
		$.ajax({
			type: 'POST',
			url: '/api/session',
			data: "price=" + $($this).attr('data-price'), 
			success: function(result) {
			
				//var obj = JSON.parse(result);
				//alert(result);
				//window.location.href = obj.action;
					
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('request failed :'+textStatus+' '+jqXHR+' '+errorThrown);
			}
		}); 
		
	}
				
	//$(modal).removeClass("open");			
	//$(modal).parents(".overlay").removeClass("open");
	 
	if(modal=="#modal5") { 
	
		var id = $(this).attr('data-id');
	 
		$.ajax({
			type: 'POST',
			url: '/api/alinks/' + id,
			data: "id=" + id, 
			success: function(result) {
			
				var obj = JSON.parse(result);
				 
				$('#modal5 .title').html(obj[0].name);
				$('#modal5 .content > div').html(obj[0].content); 
				
			$(modal).parents(".overlay").addClass("open");
			setTimeout( function(){
				$(modal).addClass("open");
			}, 150);
					
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('request failed :'+textStatus+' '+jqXHR+' '+errorThrown);
			}
		}); 
	
	
	}else{
	
	$(modal).parents(".overlay").addClass("open");
	setTimeout( function(){
		$(modal).addClass("open");
	}, 150);
	
	}

	$(document).on('click', function(e){
		var target = $(e.target);
		 
		if ($(target).hasClass("overlay")){ 
		
		if ($(target).hasClass("open-modal")){ 
			 
			/* 
			$(".overlay.open-modal").on('click', function() {  
			 
				$(".overlay.open-modal .close").click();
			
			});
			*/
		
		}else{
		
			$(target).find(".modal").each( function(){
				$(this).removeClass("open");
			});
			setTimeout( function(){
				$(target).removeClass("open");
			}, 150);
		}
		}
		
	});
	
}); 
