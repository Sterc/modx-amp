<?php
// Check if amp is set
if (!isset($_GET['amp'])) {
    return;
}

function absint( $maybeint ) {
    return abs( intval( $maybeint ) );
}

DEFINE('AMP__DIR__', MODX_CORE_PATH . 'components/amp');

require_once( AMP__DIR__ . '/includes/class-amp-post-template.php' );

$eventName = $modx->event->name;
switch($eventName) {
    case 'OnLoadWebDocument':
        $modx->resource->set('cacheKey', $modx->resource->getCacheKey('_amp'));
//        var_dump($modx->resource->getCacheKey('_amp'));
//        die();

        $modx->resource->set('template', 2);
//        $modx->resource->set('cacheable', 0);

        $content = $modx->resource->get('content');
        $ampContent = new AMP_Content($content, array(), array('AMP_Img_Sanitizer' => array()), array());
        $modx->resource->set('content', $ampContent->get_amp_content());

        break;
}

return;