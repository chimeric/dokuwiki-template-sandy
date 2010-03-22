<?php
/**
 * DokuWiki Template Sandy
 *
 * @author neolao <neo@neolao.com>
 * @author Michael Klier <chi@chimeric.de>
 * @link   http://dokuwiki.org/template:sandy
 */

require_once(DOKU_TPLINC.'tpl_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']; ?>" lang="<?php echo $conf['lang']; ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <?php tpl_metaheaders(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <title><?php echo $conf['title'] . ' [' . $ID . ']'; ?></title>
  </head>
  <body>
    <div class="dokuwiki">
      <div id="header">
         <h1><?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[ALT+H]"')?></h1>
      </div>
      <div id="menu">
        <?php tpl_topbar()?>
      </div>
      <div class="page">
        <?php if($conf['breadcrumbs']){?>
        <div class="breadcrumbs">
          <?php tpl_breadcrumbs()?>
        </div>
        <?php }?>
        <?php if($conf['youarehere']){?>
        <div class="breadcrumbs">
          <?php tpl_youarehere() ?>
        </div>
        <?php }?>
	    <?php flush(); ?>
        <?php tpl_content(); ?>
        <?php flush(); ?>
        <div class="meta">
          <div class="user">
            <?php tpl_userinfo()?>
          </div>
          <div class="doc">
            <?php tpl_pageinfo()?>
          </div>
        </div>
      </div>
      <div id="footer">
        <?php tpl_searchform(); ?>
        <ul>
          <?php 
          foreach(array('edit', 'backlink', 'recent', 'history', 'login') as $action) {
            if(actionOK($action)) {
          ?>
            <li><?php tpl_actionlink($action)?></li>
          <?php 
            } 
          }?>
        </ul>
        <ul>
          <?php 
          foreach(array('revert', 'profile', 'admin') as $action) {
            if(actionOK($action)) {
          ?>
            <li><?php tpl_actionlink($action)?></li>
          <?php 
            } 
          }?>
        </ul>
      </div>
    </div>
    <div class="no"><?php tpl_indexerWebBug()?></div>
  </body>
</html>
