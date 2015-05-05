<?php
/* Black Apple Inc.
 * http://black-apple.biz/
 * Dixie CMS
 * Created by Luthfie
 * luthfie@y7mail.com
 */

/* Include content header */
include_once('header.php');

/* View content body */
echo '<div class="title"><h2>'. get_title(false) .'</h2></div>';

?>
<style type="text/css">
.content{margin:20px 0px;}
</style>
<?php
/* Get next option and theme options */
$next = (isset($_GET['next']))?$_GET['next']:0;
$ppp = get_theme_option('Dixie2','post-per-page');

/* Generate index posts using theme option */
$gip = generate_index_posts(true,$next,$ppp);

/* Print the posts */
if(!$gip){
  echo 'Doesn\'t have a post yet';
}else{
  echo $gip;
}

/* Include content footer */
include_once('footer.php');