<html>

<head>
    <!-- Header of the Website -->
    <?php get_header(); ?>
</head>
<?php
$banner_image = new WP_Query(array('post_type' => 'banner_images', 'posts_per_page' => -1));
while ($banner_image->have_posts()) {
    $banner_image->the_post();
    /* Converting the title string into lowercase */
    $post_title = strtolower(get_the_title());
    /*Replacing space in the title with '-' so that it matches the current pagename*/
    /*For eg : title - "education awards" ; pagename - "education-awards" */
    $post_title = str_replace(' ', '-', $post_title);
    if ($post_title == $pagename) {
        $backgroundImage = get_field('background_image');
    }
    wp_reset_postdata();
}
?>

<body>
    <?php if (!is_page('user') && (!is_page('Account') && (!is_page('password-reset') && (!is_page('register'))))) { ?>
    <div class="introduction-image-span responsive" style="background-image: url('<?php echo $backgroundImage; ?>');">
        <?php
        while (have_posts()) {
            the_post();
            ?>
        <div class="banner-text"><?php the_title() ?></div>
        <?php 
    }
    ?>
    </div>
    <?php 
} ?>

    <div class="container">
        <div class="content-container">
            <!-- This if condition is used so that the following piece of code will only be displayed for 'Introduction' page -->
            <?php if (is_page('introduction')) { ?>
            <div id="accordion">
                <div class="card">
                    <h4 class="card-header">
                        <div class="text-left">
                            <?php the_field('card_title'); ?>
                            <div class="btn-group" role="group">
                                <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#messageCollapseEnglish" aria-expanded="true" aria-controls="messageCollapseEnglish">
                                    <div data-toggle="tooltip" data-placement="top" title="Click to change the message in English">
                                        EN
                                    </div>
                                </button>
                                <button class="btn btn-danger btn-sm collapsed" data-toggle="collapse" href="#messageCollapseFrench" aria-expanded="false" aria-controls="messageCollapseFrench">
                                    <div data-toggle="tooltip" data-placement="top" title="Click to change the message in French">
                                        FR
                                    </div>
                                </button>
                            </div>
                        </div>
                    </h4>
                    <div class="card-body bg-light">
                        <div class="collapse show" id="messageCollapseEnglish" data-parent="#accordion">
                            <?php the_content() ?>
                        </div>
                        <div class="collapse" id="messageCollapseFrench" data-parent="#accordion">
                            <?php the_field('french_message'); ?>
                            <hr>
                        </div>
                        <?php the_field('ottawa_message'); ?>
                    </div>
                </div>
            </div>
            <!-- If condition for introduction page content ends here -->
            <?php 
        } ?>
            <?php if (is_page('Executive')) { ?>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active test" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true"><?php the_field('first_tab_title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false"><?php the_field('second_tab_title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#thirdTab" role="tab" aria-controls="thirdTab" aria-selected="false"><?php the_field('third_tab_title'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab"><?php the_content(); ?></div>
                        <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab"><?php the_field('second_tab_content'); ?></div>
                        <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="third-tab"><?php the_field('third_tab_content'); ?></div>
                    </div>
                </div>
            </div>
            <?php 
        } ?>
            <!-- If condition for Executive page content ends here -->
            <?php if (is_page('Education Awards')) { ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                    <hr>
                    <h5>Documents</h5>
                    <div class="accordion" id="accordionDocYear">
                        <?php 
                        /*Storing all the years for awards in the variable */
                        $years = get_field('education_award_year');
                        if ($years) {
                            /*Foreach loop to display a button for each document year */
                            foreach ($years as $year) {
                                ?>
                        <button class="btn btn-dark btn-sm collapseId" id="<?php echo $year; ?>" type="button" data-toggle="collapse"><?php echo $year; ?></button>
                        <?php 
                        /*foreach loop ends*/
                    }
                    ?>
                        <div id="yearCollapse" class="collapse" aria-labelledby="year" data-parent="#accordionDocYear">
                            <div class="card-body" id="document-body">
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                        <!-- Accordion ends -->
                    </div>
                    <!-- Card-body division tag ends -->
                </div>
                <!-- Card division tag ends -->
            </div>
            <!-- If condition for Education Awards page content ends here -->
            <?php 
        } ?>
            <?php if (is_page('History')) { ?>
            <div id="accordion">
                <div class="card">
                    <h4 class="card-header">
                        <div class="text-left">
                            <?php the_field('card_title'); ?>

                        </div>
                    </h4>
                    <div class="card-body bg-light">
                        <div class="collapse show" id="messageCollapseEnglish" data-parent="#accordion">
                            <?php the_content() ?>
                        </div>
                        <div class="collapse" id="messageCollapseFrench" data-parent="#accordion">
                            <?php the_field('french_message'); ?>
                            <hr>
                        </div>
                        <?php the_field('ottawa_message'); ?>
                    </div>
                </div>
            </div>
            <!-- If condition for History page content ends here -->
            <?php 
        } ?>


            <!-- If condition for Contact page starts here -->
            <?php if (is_page('Contact')) { ?>
            <div class="row">
                <div class="col-sm-3 ed-pad">
                    <?php 
                    $genQ = get_field_object('general_inquiries');
                    echo "<h3>" . $genQ["label"] . "</h3>";
                    echo "<p>" . $genQ["value"] . "</p>";
                    ?>
                </div>
                <div class="col-sm-3 ed-pad">
                    <?php 
                    $exofficeQ = get_field_object('executive_office');
                    echo "<h3>" . $exofficeQ["label"] . "</h3>";
                    echo "<p>" . $exofficeQ["value"] . "</p>";
                    ?>
                </div>
                <div class="col-sm-3 ed-pad">
                    <?php 
                    $exassQ = get_field_object('executive_assistant');
                    echo "<h3>" . $exassQ["label"] . "</h3>";
                    echo "<p>" . $exassQ["value"] . "</p>";
                    ?>
                </div>
                <div class="col-sm-3 ed-pad">
                    <?php 
                    $addQ = get_field_object('address');
                    echo "<h3>" . $addQ["label"] . "</h3>";
                    echo "<p>" . $addQ["value"] . "</p>";
                    ?>
                </div>
                <hr>
                <div class="map-responsive">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- If condition for Contact page ends here -->
            <?php 
        } ?>
            <?php if (is_page('profile')) { ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
            <?php 
        } ?>
            <!-- If condition for Laws & Regulations page ends here -->
            <?php if (is_page('Laws & Regulations')) { ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                    <hr>
                    <h5>Documents</h5>


                    <?php if (get_field('file1')) : ?>

                    <a <button class="btn btn-danger btn-sm" target="_blank" href="<?php the_field('file1'); ?>"> <?php the_field('descfile1'); ?> (<?php the_field('yearfile1'); ?>) </button> </a>

                    <?php endif; ?>
                    <?php if (get_field('file2')) : ?>

                    <a <button class="btn btn-danger btn-sm" target="_blank" href="<?php the_field('file2'); ?>"> <?php the_field('descfile2'); ?> (<?php the_field('yearfile2'); ?>) </button> </a>

                    <?php endif; ?>
                    <?php if (get_field('file3')) : ?>

                    <a <button class="btn btn-danger btn-sm" target="_blank" href="<?php the_field('file3'); ?>"> <?php the_field('descfile3'); ?> (<?php the_field('yearfile3'); ?>) </button> </a>

                    <?php endif; ?>


                    <!-- Card-body division tag ends -->
                </div>
                <!-- Card division tag ends -->
            </div>
            <!-- If condition for laws and regulations page content ends here -->

            <?php 
        } ?>
            <!-- If condition for Contact page starts here -->
            <?php if (is_page('Membership')) { ?>
            <div class="row">
                <div class="col-md-6 right-border">
                    <h3>Login</h3><br>
                    <?php 
                    $login = new WP_Query('pagename=login');
                    while ($login->have_posts()) {
                        $login->the_post();
                        the_content();
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-6 ">
                    <h3>Register</h3><br>
                    <p class="text-muted">To start, complete and submit the following application, which will be automatically emailed to your chosen division for review. The review process will be completed within five days.
                        Following review, you will receive an email confirming membership.</p>
                    <div class="btn-block-signup">
                        <a role="button" class="btn btn-danger btn-block register-button" href="/register">Register</a>
                        <hr><a role="button" class="btn btn-danger btn-block register-button" href="#">Download Application Form</a>
                    </div>
                    <p class="text-muted">* Each applicant must meet the <a href="#" class="membership-link">membership criteria</a></p>
                </div>
            </div>
            <?php 
        } ?>

            <?php if (is_page('register')) { ?>
            <div class="jumbotron">
                <h1>Register with RCMP Veteran's Association</h1>
                <p>Membership in the Ottawa Division of the RCMPVA is open to a wide range of former and serving members and employees of the RCMP. Membership is only available to a person of good character who has had his/her application reviewed and approved by a division credentials committee.</p>
            </div>
            <?php 
            $user = new WP_Query('pagename=register');
            while ($user->have_posts()) {
                $user->the_post();
                the_content();
            }
            ?>
            <div class="jumbotron">
                <h1>Need Help?</h1>
                <p><?php the_field('need_help_info'); ?></p>
            </div>
            <?php 
            wp_reset_postdata();
        } ?>
            <?php if (is_page('user')) {
                $user = new WP_Query('pagename=user');
                while ($user->have_posts()) {
                    $user->the_post();
                    the_content();
                }
                wp_reset_postdata();
                ?>
            <?php 
        } ?>
            <?php if (is_page('account')) {
                $user = new WP_Query('pagename=account');
                while ($user->have_posts()) {
                    $user->the_post();
                    the_content();
                }
                wp_reset_postdata();
                ?>
            <?php 
        } ?>
            <?php if (is_page('password-reset')) {
                $user = new WP_Query('pagename=password-reset');
                while ($user->have_posts()) {
                    $user->the_post();
                    the_content();
                }
                wp_reset_postdata();
                ?>
            <?php 
        } ?>
            <?php if (is_page('george')) { ?>
            <div id="accordion">
                <div class="card">
                    <div class="text-left">
                        <?php the_field('crossdescription'); ?>
                    </div>
                </div>
            </div>
            <!-- If condition for History page content ends here -->
            <?php 
        } ?>


            <?php if (is_page('arthur-richardson')) { ?>
            <div id="accordion">
                <div class="card">
                    <div class="text-left">
                        <?php the_field('crossdescription'); ?>
                    </div>
                </div>
            </div>
            <!-- If condition for History page content ends here -->
            <?php 
        } ?>


            <?php if (is_page('michael-oleary')) { ?>
            <div id="accordion">
                <div class="card">
                    <div class="text-left">
                        <?php the_field('crossdescription'); ?>
                    </div>
                </div>
            </div>
            <!-- If condition for History page content ends here -->
            <?php 
        } ?>
        <?php if(is_Page('links')){ ?>
		<?php the_content(); ?>
		
		<div class=" row" role="group" aria-label="Basic example">
	
		<div class ="col-md-4">
			<div class="dropdown">
  <button class="btn btn-secondary btn-lg text-white bg-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php the_field('rcmp_veterans') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('rcmp') ?>">RCMP Veterans' Association</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('calgary') ?>">Calgary Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('edmonton') ?>">Edmonton Division</a>
	 <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('kingston') ?>">Kingston Division</a>
	  <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('manitoba') ?>">Manitoba Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('montreal') ?>">Montreal Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('brunswick') ?>">New Brunswick Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('foundland') ?>">Newfoundland Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('nova') ?>">Nova Scotia Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('prince_Edward') ?>">Prince Edward Island</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('prince_george') ?>">Prince George Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('regina') ?>">Regina Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('saskatoon') ?>">Saskatoon Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('Snow') ?>">Snow Birds</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('vancouver') ?>">Vancouver Division</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('yukon') ?>">Yukon Division</a>
  
  </div>

</div>
	</div>	
	<div class="col-md-4">
<div class="dropdown">		
  <button class="btn btn-secondary btn-lg text-white bg-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('rcmp_label') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('graves') ?>">Graves and Monument</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('last_post') ?>">Last Post</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('long_island') ?>">Long Island Conference Centre & Recreation Facility</a>
	 <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('Rcmp_rcmp') ?>">RCMP</a>
	  <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('curling_club') ?>">RCMP Curling Club</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('heritage_center') ?>">RCMP Heritage Center</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('honours') ?>">RCMP Honours and Recognition Programs</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('national') ?>">RCMP National Memorial Cemetry</a>
    <a class="dropdown-item text-white bg-dark"  target="_blank" href="<?php the_field('pipes') ?>">RCMP Pipes and Drums</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('foundation') ?>">RCMP Foundation</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('pension') ?>">RCMP Pension</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('Quarterly') ?>">The Quarterly</a>
  
  </div>
     </div>
</div>

			<div class="col-md-4">
		<div class="dropdown">	
  <button class="btn btn-secondary btn-lg text-white bg-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('government_label') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('bruce') ?>">Bruce Denniston Bone Marrow Society -Ottawa Chapter</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('federal') ?>">Federal Supernnuates National Association</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('federal-ottawa') ?>">Federal Supernnuates National Association -Ottawa</a>
	 <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('ontario') ?>">Ontario Provincial Police Veterans</a>
	  <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('public') ?>">Public Service Health Care Plan</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('service') ?>">Service Canada</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('metropolitan') ?>">Metropolitan Toronto Police Pensioners Association</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('treasury') ?>">Treasury Board</a>
  
  </div>
		 </div>
</div>
</div>

<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<?php } ?>
		


		<?php if(is_Page('Kit Clothing')){ ?>
        <?php the_content(); ?>
		<div class="row">
		<div class="col-md-6">
		<a type="button" class="btn text-white bg-dark" data-toggle="tooltip" title="Dress Code" target="_blank" href="<?php the_field('order_of_dress') ?>">Orders of Dress</a>
		</div>
		</div>
		
						
						<?php } ?>
		
		<?php if(is_Page('RCMP National Memorial Cemetary')){ ?>
        <?php the_content(); ?>
		<div class="row">
		<div class="col-md-6">
		<a type="button" class="btn btn-lg text-white bg-dark" data-toggle="tooltip" title="Click to Open Pamphlet" target="_blank" href="<?php the_field('pamphlet') ?>">Pamphlet</a>
		</div>
		<div class="col=md-6">
		<a type="button" class="btn btn-lg text-white bg-dark" data-toggle="tooltip" title= "Click to Open the BeechWood Website" target="_blank" href="<?php the_field('website') ?>">Website</a>
		</div>
		</div>
		<?php } ?>
		
		<?php if(is_Page('The Spirit')){ ?>
        <?php the_content(); ?>
		<div class="row">
	<div class="col-md-3">
  <button class="btn btn-lg text-white bg-dark dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('2018issue') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2018fall') ?>">Fall</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2018summer') ?>">Summer</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('may_23_2018') ?>">May 23, 2018 <br/> Vigil at Beechwood</a>
	 <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2018spring') ?>">Spring</a>
	  <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2018winter') ?>">Winter</a>
  </div>
</div>

<div class="btn  col-md-3">
  <button class="btn btn-lg text-white bg-dark dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('2017issue') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2017fall') ?>">Fall</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2017summer') ?>">Summer</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2017spring') ?>">Spring</a>
	<a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2017winter') ?>">Winter</a>
  
</div>

</div>

<div class="btn  col-md-3">

  <button class="btn btn-lg text-white bg-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('2016issue') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2016fall') ?>">Fall</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2016summer') ?>">Summer</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2016spring') ?>">Spring</a>
	<a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2016winter') ?>">Winter</a>
  </div>
</div>

<div class="btn  col-md-3">
  <button class="btn btn-lg text-white bg-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?php the_field('2015issue') ?>
  </button>
  <div class="dropdown-menu text-white bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2015fall') ?>">Fall</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2015summer') ?>">Summer</a>
    <a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2015spring') ?>">Spring</a>
	<a class="dropdown-item text-white bg-dark" target="_blank" href="<?php the_field('2015winter') ?>">Winter</a>
  </div>
  </div>
</div>


<br/>
<br/>
<br/>

<br/>
<br/>
<br/>


			<?php } ?>
			
            <!-- Content Container division tag ends here -->
        </div>
        <!-- Container division tag ends here -->
    </div>

    <!-- Footer of the Website -->
    <?php get_footer(); ?> 