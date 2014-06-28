<?php
/**
 * @author Seungchul Lee, Jae Yun Song
 * @Date   : June 27, 2014
 */
?>

<div class="header-signup">
    <div class="row">
        <div class="large-1 columns">
            <div class="row">
                <div class="large-2 columns">
                    <a href="<?php echo URL; ?>">Index</a>
                </div>
            </div>
        </div>
        <div class="large-7 columns">
            <div class="row">
                <form action ="<?php echo URL; ?>index/login" method="post">
                    <div class="large-4 columns">
                        <input type="text" name="login" placeholder="Login" />
                    </div>
                    <div class="large-4 columns">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="large-4 columns">
                        <div class="row collapse">
                            <div class="small-9 columns">
                                <input class="custom-tiny radius button" type="submit" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="small-4 columns">
                    <a href="<?php echo URL; ?>forget">Forget PassWord?</a>
                </div>
            </div>
        </div>
    </div>
</div>