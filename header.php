<?php
$site_name = $this->dict('site: name', false);
$title = isset($entity) ? $this->getTitle($entity) : $this->getTitle()
?>
<!DOCTYPE html>
<html lang="<?php echo $app->getCurrentLCode(); ?>" dir="ltr">
<head>
    
    <link rel="stylesheet" type="text/css" href="/assets/css/semcult.css" />

    <?php $this->applyTemplateHook('head','begin'); ?>

    <meta charset="UTF-8" />
    <title><?php echo $title == $site_name ? $title : "{$site_name} - {$title}"; ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php $this->asset('img/favicon.ico') ?>" />
    
    <?php $this->head(isset($entity) ? $entity : null); ?>
    </head>
                                
    <body <?php $this->bodyProperties() ?> >
    
        <?php $this->bodyBegin(); ?> 
        <header id="main-header" class="clearfix"  ng-class="{'sombra':data.global.viewMode !== 'list'}">
            <?php $this->part('header-logo') ?>
            <?php $this->part('header-about-nav') ?>
            <?php $this->part('header-main-nav') ?> 
        </header>
        <section id="main-section" class="clearfix">
            <?php if ($this->isEditable()): ?>
                <div id="ajax-response-errors" class="js-dialog" title="<?php \MapasCulturais\i::esc_attr_e("Corrija os erros abaixo e tente novamente.");?>">
                    <div class="js-dialog-content"></div>                    
                </div>
            <?php endif; ?>