<?php
/**
 * @version		$Id: error.php 20981 2011-03-17 10:56:46Z chdemko $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if (!isset($this->error)) {
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false; 
}

	$app = JFactory::getApplication();
    $params = JFactory::getApplication()->getTemplate(true)->params;
    
    //Parametros de la plantilla
    $imagenLogo = $params->get('logo');
    $eslogan = $params->get('eslogan');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?> - <?php echo $app->getCfg('sitename'); ?></title>
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/960.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/xxx.js"></script>
</head>

<body>
<div id="container" class="container_12">
	<div id="top_menus" class="grid_12">
    	<div id="link_home" class="alpha grid_1"><a href="index.php?option=com_content&view=article&id=182:geschiedenis-wissen&catid=43:ik-zoek-hulp&Itemid=153"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/home.gif" width="30" height="30" alt="Home" /></a></div>
        <div id="menu_left_top" class=" alpha grid_5 jquerycssmenu" > &nbsp;</div><!-- menu_left -->
        <div id="menu_center_top" class="alpha grid_5 jquerycssmenu_center">&nbsp;</div><!-- menu_center -->
        <div id="link_exit" class="alpha grid_1 omega"><a href="http://www.startpagina.nl" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/exit.gif" width="30" height="30" /></a>
        </div><!-- menu_rigth -->
    </div><!-- top_menus -->
    
    <div id="banner" class="grid_12">
		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/banner_01.jpg" width="984" height="140" alt=" " />
    	<div id="phone">(035) 699 11 99</div>
        <div id="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.gif" width="184" height="119" alt="Stop" /></div>
	</div><!-- banner -->
    
    <div id="main_container" class="grid_12">
    	<div id="container_left">
        	<div id="breadcrumbs" class="">
            	<a href="/huiselijkgeweld/index.php">Home</a>  
            </div><!-- breadcrumbs -->
			
        	<div id="menu_left"> &nbsp; </div><!-- menu_left -->
            
        	<div id="content_center" class="">
            <h2><?php echo $this->error->getCode(); ?> - <?php echo $this->error->getMessage(); ?></h2>

			<p><strong><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></strong></p>
            <ol>
					<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_REQUESTED_RESOURCE_WAS_NOT_FOUND'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></li>
			</ol>
                        
            <p><strong><?php echo JText::_('JERROR_LAYOUT_PLEASE_TRY_ONE_OF_THE_FOLLOWING_PAGES'); ?></strong> </p>
			
			<ul>
					<li><a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></li>
					<li><a href="<?php echo $this->baseurl; ?>/index.php?option=com_search" title="<?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></a></li>
			</ul>
			
			<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?>.</p>
			<div id="techinfo">
				<p><?php echo $this->error->getMessage(); ?></p>
				<p><?php if ($this->debug) :
						echo $this->renderBacktrace();
						endif; ?>
				</p>
			</div>

			
            </div><!-- content_center -->
            <div id="footer">
            	<div id="footerlinks">
                	<p>&copy; Steunpunt Huiselijk Geweld Gooi en Vechtstreek</p> 
                </div>
                <div id="footerrechts">Site by <a target="_blank" title="Orangehill - powered by curiosity" href="http://www.orangehill.nl">Orangehill</a></div>
            </div><!-- footer -->
            <div class="clear"></div>
        </div><!-- container_left -->
        <div id="container_rigth">  &nbsp; </div><!-- container_rigth -->
	</div><!-- main_container -->
	<div class="clear"></div>
</div>	
</body>
</html>
