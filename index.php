<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" 
dir="<?php echo $this->direction; ?>" >
<?php $app = JFactory::getApplication(); ?> 

<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>

<body>
	<div id="wrapper">

    	<div id="header">
   			<div id="top"><jdoc:include type="modules" name="top" style="xhtml" /></div><!--top-->
        </div><!--header-->

        <div id="main">
        	<div id="left"><jdoc:include type="modules" name="left" style="xhtml" /></div><!--left-->
			<div id="content">
				<jdoc:include type="message" />
            	<jdoc:include type="component" />
            </div><!--content-->
        </div><!--main-->

		<div id="footer"><jdoc:include type="modules" name="footer" style="xhtml" /></div><!--footer-->

	</div><!--wrapper-->

	<div id="blanc"></div><!--blanc-->

</body>

</html>