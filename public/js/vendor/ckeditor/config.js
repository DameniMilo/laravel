/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.extraPlugins='widget,lineutils,image2,imageresponsive';
    //config.toolbar=[];
    //config.allowedContent = true;
    //config.protectedSource.push(/<jahia:resource[\s\S\t\r\n]*?\/jahia:resource>/);
    //config.extraAllowedContent='jahia:resource(*)[*]{*}';
};
