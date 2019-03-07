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
			jQuery(this).find('option').each(function(){
				jQuery('.'+name+'_'+this.value).each(function(){
          jQuery(this).parents(parent).hide();
        })
      })
			jQuery('.'+name+'_'+jQuery(this).find('option:selected').val()).each(function(){
				jQuery(this).parents(parent).fadeIn(500);
			})
		});
		jQuery(this).change();
	});	// FlipClock Type
	
	jQuery('.toggle').each(function() {
		jQuery(this).change(function() {
			var name = this.id.replace('jform_params_','')
			var inp = jQuery('*[class^="'+ name +'_"]')
			jQuery(inp).each(function() {	// Hide first
				jQuery(this).parent().parent().hide()
			})
			console.log(this)
			console.log(this.children)
			if (jQuery(this).find('input').prop('checked')) {
				jQuery(inp).each(function() {
					jQuery(this).parent().parent().fadeIn(400)
				})
			}
		})
		jQuery(this).change()
	})
})