<div id="footer">
    <div class="about_us">
        <div class="our_list">
            <ul class="list_all">
                <li><a href="#">works</a></li>
                <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/company.php'; ?>">company</a></li>
                <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/recruit.php'; ?>">recruit</a></li>
                <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/contact.php'; ?>">contact</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/js/wow.min.js'; ?>"></script>
<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/js/main.js'; ?>"></script>
<?php if(isset($script)){?>
<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/js/'.$script.'.js'; ?>"></script>
<?php } ?>
<?php if(isset($contact)){ ?>
<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/js/'.$contact.'.js'; ?>"></script>
<?php } ?>
<?php if(isset($recruit)){ ?>
<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/js/'.$recruit.'.js'; ?>"></script>
<?php } ?>