@include('layout.frontend.partial.scripts.header_script')
<header>
	<div class="row">
		<div class="col-md-12">
			<img src="{{ asset('assets/frontend/images/profile.png') }}" class="img-circle avatar" alt="Cinque Terre" width="200" height="200"> 
			<h1>Welcome To My Blog </h1>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<div class="column">
						<div id="dl-menu" class="dl-menuwrapper">
							<button class="dl-trigger">Open Menu</button>
							<ul class="dl-menu">
								<!-- <li>
									<a href="#">Fashion</a>
									<ul class="dl-submenu">
										<li>
											<a href="#">Men</a>
											<ul class="dl-submenu">
												<li><a href="#">Shirts</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Chinos &amp; Trousers</a></li>
												<li><a href="#">Jeans</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Underwear</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Women</a>
											<ul class="dl-submenu">
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Knits</a></li>
												<li><a href="#">Jeans</a></li>
												<li><a href="#">Dresses</a></li>
												<li><a href="#">Blouses</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Underwear</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Children</a>
											<ul class="dl-submenu">
												<li><a href="#">Boys</a></li>
												<li><a href="#">Girls</a></li>
											</ul>
										</li>
									</ul>
								</li> -->
								<li>
									<a href="#">Category</a>
									<ul class="dl-submenu">
										<li><a href="#" onclick="categori('blog')" >Blog</a></li>
										<li><a href="#" onclick="categori('tutorial')">Tutorial</a></li>
										<li><a href="#" onclick="categori('galeri')">Galeri</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /dl-menuwrapper -->
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</header>
