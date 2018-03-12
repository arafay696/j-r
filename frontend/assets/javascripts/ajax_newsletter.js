function Trim(s)
{return s.replace(/^\s+/g,'').replace(/\s+$/g,'');}
function checknewsletter()
{
	jQuery("#frmnewsletter").validationEngine('attach',{promptPosition:"topRight",scroll:false});
	resp=jQuery("#frmnewsletter").validationEngine('validate');
//	alert(resp);
	if(resp==true){
	
		$("#newletter_subscribe").hide();
		$("#newletter_loading").show();
		var request=$.ajax({
			type:"POST",
			url:site_url+'index.php?file=ax-newsletter_subscription',
			data:"vEmail="+$("#vNewsletterEmail").val(),success:function(data){
				$("#newletter_loading").hide();
				$("#newletter_subscribe").show();
				if(Trim(data)=="done"){
					$("#vNewsletterEmail").val("");
					showNotification({duration:3,autoClose:true,type:'success',message:'You have successfully subscribed for our newsletters.'});
					//return false;
					}
					else{
						$("#vNewsletterEmail").val("");
						showNotification({duration:3,autoClose:true,type:'error',message:'An email address provided is already subscribed for our newsletters.'});
						//return false;
						}
						}
						});
				request.fail(function(jqXHR,textStatus){alert("Request failed: "+textStatus);});
				}
				else{
					return false;
	}
}
