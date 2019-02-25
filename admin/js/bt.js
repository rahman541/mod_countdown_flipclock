jQuery.noConflict();
window.addEvent("domready",function(){
	var parent = 'li:first';
	if(jQuery(".row-fluid").length){
		parent = 'div.control-group:first';
  }
	
  // Group element
	jQuery(".bt_control").each(function(){ 
    if(jQuery(this).parents(parent).css('display')=='none' ) return;
		jQuery(this).change(function(){
      var name = this.id.replace('jform_params_','');
      console.log(name)
			jQuery(this).find('option').each(function(){
        console.log('.'+name+'_'+this.value)
        jQuery('.'+name+'_'+this.value).each(function(){
          jQuery(this).parents(parent).hide();
        })
      })
				
			jQuery('.'+name+'_'+jQuery(this).find('option:selected').val()).each(function(){
				jQuery(this).parents(parent).fadeIn(500);
			})
		});
		jQuery(this).change();
	});
})


