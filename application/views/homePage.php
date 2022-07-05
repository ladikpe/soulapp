<?php $session = $this->session->userdata('loginSession') ; ?>
<?php if (!$session){{ redirect('pointer/loginPointer') ;} } ?>
<!-- Banner -->


			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to O365 knowledgeShare</h1>
                                                <h6 style="color: #fff">This is a platform where O365 technical solutions are exchanged between O365 professionals and SME, this platform covers
                                                 Exchange Online, SharePoint Online, Skype for Business, Microsoft Teams and OneDrive for Business</h6>
                                                <h6 style="color: #fff">This platform is one of Microsoft O365 most recognized solutions platform in Nigeria.</h6>
					</header>
					<a href="#main" class="button big scrolly">Scroll down to view O365 key technologies</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
                                                                                    <a href="<?php echo base_url('message/getOneDrive') ; ?>" class="link"><img width="250" height="250" src="<?php echo base_url().'assets/images/picOneDrive.jpg' ; ?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>OneDrive for Business</h3>
										<p> Looking for difficult solutions to OneDrive for Business Issues, tough technical issues you have been battling with.
                                                                                    You can check out some of the solutions on this platform.
                                                                                    view, contribute your solution and also share your thought on each solutions provided.
                                                                                </p>
										<a href="<?php echo base_url('message/getOneDrive') ; ?>" class="button">Drive in</a>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>SharePoint Online</h3>
									<p>Searching for the most difficult SharePoint Online issues, click on the link to view solutions to sharePoint online related issues</p>
									<a href="<?php echo base_url('message/getSharePoint') ; ?>" class="button">Drive in</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="<?php echo base_url('message/getSharePoint') ; ?>" class="link"><img src="<?php echo base_url('assets/images/sharePoint1.jpg') ; ?>" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>
                                        <section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
                                                                                    <a href="<?php echo base_url('message/getSfb') ; ?>" class="link"><img src="<?php echo base_url().'assets/images/skypeForBusiness.png' ; ?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Skype for Business</h3>
										<p>Add your thought, your solutions and also view contributed solutions to some Skype for Business problems.
                                                                                </p>
										<a href="<?php echo base_url('message/getSfb') ; ?>" class="button">Drive in</a>
									</div>
								</div>
						</div>
					</section>
                                        <!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Exchange Online</h3>
									<p>Finding difficult solutions on mailbox migration, Outlook, O365 Identity management, )365 Cloud security breach, MailFlow,
                                                                        Exchange online Protection and a lot more. you are at the right platform
                                                                        </p>
									
									<a href="<?php echo base_url('message/getExchangeOnline') ; ?>" class="button">Drive in</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="<?php echo base_url('message/getExchangeOnline') ; ?>" class="link"><img src="<?php echo base_url('assets/images/exchangeOnline.png') ; ?>" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>
                                        <!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
                                                                                    <a href="<?php echo base_url('message/getMSTEams') ; ?>" class="link"><img src="<?php echo base_url().'assets/images/microsoftTeams.png' ; ?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Microsoft Teams </h3>
										<p>Microsoft Teams have really helped a lot of businesses to keep them running since inception of this pandemic.
                                                                                    If you have any issues related to Teams meeting scheduling, LiveEvent, Phone Routing issues, Teams policy setup, Teams meeting policy setting, 
                                                                                    and a lot more. You can view some of the solutions here. Just click on drive in below to check some out.
                                                                                </p>
										<p>This platform is one one of Microsoft most recognized solutions platform in Nigeria.</p>
										<a href="<?php echo base_url('message/getMSTEams') ; ?>" class="button">Drive in</a>
									</div>
								</div>
						</div>
					</section>
			</div>
