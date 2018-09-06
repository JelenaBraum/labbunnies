<?php/**
 * Template Name: RegistrationForm
 */ ?>

 <?php

 $dtbserver 	=  "localhost"; 			// server, na kterem bezi databaze localhost
 $dtblogin	= "labbunnies";  							// logovaci jmeno pro databazi root
 $dtbheslo	=  "129241252";							// heslo pro databazi 	
 $dtb	 	= "labbunnies";						// jmeno databaze
  
  session_start(); 

@$spojeni=MySQL_Connect($dtbserver,$dtblogin,$dtbheslo);
if (!$spojeni):
	echo "Nepovedlo se pripojit k databazi:".mysql_error();
	die;
endif;

 
 
 set_time_limit(600);
 // error_reporting(E_ALL);
 // ini_set('display_errors','1');
?>

<?php get_header();
?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="page-header">
				<?php if (is_front_page()) : ?>
					<h2 class="page-title">Registration Form<?php/**
     * the_title();
     */ ?></h2>
					<!-- .page-title -->
				<?php else : ?>
					<h1 class="page-title">Registration Form<?php/**
         * the_title();
         */ ?></h1>
					<!-- .page-title -->
				<?php endif;
     excellent_breadcrumb();
    ?><!-- .breadcrumb -->
			</header><!-- .page-header -->
			<?php
     if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
			<section id="post-<?php the_ID();
            ?>" <?php post_class();
            ?>>
				<article id="post-<?php the_ID();
            ?>" <?php post_class();
            ?>>
				<div class="entry-content clearfix">
         

<!-- REGISTRATION FORM -->
      
      <h4>Please, fill out this form.</h4>
      <p>Your registration number will be (for privacy reasons) emailed to you after you confirm your e-mail address.</p>
      
      <form method="post">
        <table>
          <tr>
            <td>
              <b>Name:</b>
            </td>
            <td>  
              <input type="text" maxlength="250" name="name" size="50">
            </td>
          </tr>
            <td>
              <b>Surname:</b>
            </td>
            <td>
              <input type="text" maxlength="250" name="surname" size="50">
            </td>
          </tr>
          </tr>
            <td>
              <b>Gender:</b>
            </td>
            <td>
              <input type="radio" name="gender" value="0"> Male 
              <input type="radio" name="gender" value="1"> Female 
              <input type="radio" name="gender" value="2"> Other             
            </td>
          </tr>
            <td>
              <b>E-mail Address:</b>
            </td>
            <td>
              <input type="text" maxlength="250" name="email" size="50">
            </td>
          </tr>
            <td>
              <b>Year of Birth</b>
            </td>
            <td>
              <select name="birthyear">
                <option value="1000">-- Please, choose --</option>
                <?php
                  for ($i = (date('Y')-110); $i <= (date('Y')-10); $i++) {
        	          echo "<option value=\"".$i."\">".$i."</option>";
                  }
        
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>* Country of origin:</b>
            </td>
            <td>  
              <select name="coo">
                <?php
                   $mydb = new wpdb('labbunnies','129241252','labbunnies','localhost');
                   $rows = $mydb->get_results("select cc_fips, country_name from country order by country_name");
                   foreach ($rows as $obj) :
                     echo "<option value=\"".$obj->cc_fips."\">".$obj->country_name."</option>";
                   endforeach;
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>* ** Town of origin:</b>
            </td>
            <td>  
              <select name="too">
                <option value="Need to learn AJAX first...">Need to learn AJAX first...</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>Current country:</b>
            </td>
            <td>  
              <select name="cc">
              <?php
                  // $mydb = new wpdb('labbunnies','129241252','labbunnies','localhost');
                   $rows = $mydb->get_results("select cc_fips, country_name from country order by country_name");
                   foreach ($rows as $obj) :
                     echo "<option value=\"".$obj->cc_fips."\">".$obj->country_name."</option>";
                   endforeach;
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>** Current town:</b>
            </td>
            <td>  
              <select name="ct">
                <option value="Need to learn AJAX first...">Need to learn AJAX first...</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>*** Primary language:</b>
            </td>
            <td>  
              <select name="language">
              <?php
                  // $mydb = new wpdb('labbunnies','129241252','labbunnies','localhost');
                   $rows = $mydb->get_results("select id, value from language order by value");
                   foreach ($rows as $obj) :
                     echo "<option value=\"".$obj->id."\">".$obj->value."</option>";
                   endforeach;
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>Do you have toxoplasmosis?</b>
            </td>
            <td>  
              <select name="toxo">
                <option value="2">I don't know / I am not sure</option>
                <option value="0">No, I have been tested in a laboratory and the test came out negative.</option>
                <option value="1">Yes, I have been tested in a laboratory and the test came out positive.</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <b>Rhesus factor</b>
            </td>
            <td>  
              <select name="rhd">
                <option value="2">I don't know / I am not sure</option>
                <option value="0">RhD negative (Rh-; A-, B-, AB-, 0-)</option>
                <option value="1">RhD positive (Rh+; A+, B+, AB+, 0+)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <b>Do you want to tell us something?</b><br> 
              <textarea name="notes" rows="5" cols="15"></textarea>
            </td>
          </tr>
          
         
         
         
         
          <tr>
            
            <td align="center" colspan="2">  
              I have read your Private Data Policy and I understand it.<br>
              I am hereby giving you my informed consent to work with my data in described & ethical manner.<br>
              <input type="submit" value="Now give me my Bunny ID">
            </td>
          </tr>
           
      
      
      
      
      
        </table>
      </form>    
      <p>
        * Please, choose the country (and town) you lived in for most of your childhood years (until adulthood).<br>
        ** If you town isn't listed, please, choose a nearby town that is. <br>
        *** The language you feel most comfortable speaking. 
      </p>
      

      
      
<!-- REGISTRATION FORM -->
 					<?php the_content();
            ?>       
          
          				</div> <!-- entry-content clearfix-->
				<?php
             wp_link_pages(array(
                    'before' => '<div style="clear: both;"></div><div class="pagination clearfix">' . esc_html__('Pages:', 'excellent'),
                     'after' => '</div>',
                     'link_before' => '<span>',
                     'link_after' => '</span>',
                     'pagelink' => '%',
                     'echo' => 1
                    ));
             comments_template();
            ?>
				</article>
			</section>
			<?php } 
        } else {
        ?>
			<h1 class="entry-title">Registration Form <?php/**
         * esc_html_e( 'No Posts Found.', 'excellent' );
         */ ?> </h1>
          
			<?php
         } 
    ?>
		</main><!-- end #main -->
	</div> <!-- #primary -->
<?php
    get_sidebar();
    ?>
</div><!-- end .wrap -->
<?php
    get_footer();
    
