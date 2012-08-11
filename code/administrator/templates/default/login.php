<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />

<meta http-equiv="X-UA-Compatible" content="chrome=1">

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo  $this->template ?>/css/default.css" rel="stylesheet" type="text/css" />
</head>

<body class="<?php echo JRequest::getVar('option', 'cmd'); ?> login">
	<div id="container">
		<div id="login-box" class="login">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/nooku-server_logo.png" alt="Nooku Server logo">
			<jdoc:include type="message" />
			<div id="section-box">
				<jdoc:include type="component" />
			</div>
			<a class="return" href="<?php echo JURI::root(); ?>">
				<?php echo JText::_('Return to') ?>
				<?php echo $this->params->get('showSiteName') ? $mainframe->getCfg( 'sitename' ) : JText::_('Website'); ?>
			</a>
			
		</div>
	</div>
</body>
</html>