(function($){$.fn.imagePreview=function(params){$(this).change(function(evt){if(typeof FileReader=="undefined")return true;var fileInput=$(this);var files=evt.target.files;for(var i=0,f;f=files[i];i++){if(!f.type.match('image.*')){continue;}
var reader=new FileReader();reader.onload=(function(theFile){return function(e){var imgHTML='<img class="file-input-thumb" width="150" src="'+ e.target.result+'" title="'+ theFile.name+'"/>';$(params.selector).html('');if(typeof params.selector!='undefined'){$(params.selector).html(imgHTML);}else{fileInput.before(imgHTML);}};})(f);reader.readAsDataURL(f);}});};})(jQuery);