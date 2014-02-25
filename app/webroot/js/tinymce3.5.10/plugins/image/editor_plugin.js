(function(){
	tinymce.create('tinymce.plugins.image', {

		init : function(ed, url){

			ed.addCommand('open_image', function(){
				
				var el = ed.selection.getNode();
				var url = ed.settings.image_explorer;
				if(el.nodeName == 'IMG')
				{
					url = ed.settings.image_edit;
					url += '?src='+ed.dom.getAttrib(el, 'src')+'&alt='+ed.dom.getAttrib(el, 'alt')+'&class='+ed.dom.getAttrib(el, 'class');
				}

				ed.windowManager.open({
					file	: url,
					id		: 'image',
					width	: $(window).width() - 100,
					height	: $(window).height() - $(window).height() / 3,
					inline	: true,
					title	: 'Insérer unee image'
				},{
					plugin_url : url
				});
			});
			ed.addButton('image',{
				title	: 'Insérer une image',
				cmd		: 'open_image'
			});
		}

	});

	tinymce.PluginManager.add('image', tinymce.plugins.image);

})();