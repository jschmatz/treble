
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo __ROOT_DIR__; ?>/static/js/plugins/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo __ROOT_DIR__; ?>/static/js/plugins/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo __ROOT_DIR__; ?>/static/js/config.js"></script>
<script type="text/javascript" src="<?php echo __ROOT_DIR__; ?>/static/js/main.js"></script>
<?php
    global $pc;
    
    if($pc != null && count($pc->jsFiles) > 0)
    {
        foreach(array_unique($pc->jsFiles) as $js) {
            ?>
            <script src=<?php echo $js;?>></script>
            <?php
        }
    }
?>