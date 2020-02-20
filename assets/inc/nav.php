</head>
    <body>
		
        <nav>
				<label id="icon" class="menu-button" for="main"><span id="menu_button" class="fa fa-bars"></span></label>
				<input type ="checkbox" id="main" onclick="iconChange(this)"/>
            <ul id="main-menu">
                <li><a <?php echo (($page=='Home')?' class="active"':''); ?> href="index.php">Home</a></li>
				<li <?php echo (($category=='Boroughs')?' class="active"':''); ?> >
					<label class="menu-button" for="boroughs">Boroughs <span class="fa fa-caret-down"></span></label>
					<input type ="checkbox" id="boroughs" class="check" onclick="box(this)"/>
                    <ul>
                        <li><a <?php echo (($page=='Brooklyn')?' class="active"':''); ?> href="brooklyn.php">Brooklyn</a></li>
                        <li><a <?php echo (($page=='Manhattan')?' class="active"':''); ?> href="manhattan.php">Manhattan</a></li>
                        <li><a <?php echo (($page=='Queens')?' class="active"':''); ?> href="queens.php">Queens</a></li>
                        <li><a <?php echo (($page=='theBronx')?' class="active"':''); ?> href="thebronx.php">The Bronx</a></li>
                        <li><a <?php echo (($page=='StatenIsland')?' class="active"':''); ?> href="statenisland.php">Staten Island</a></li>
                    </ul>
				</li>
                <li <?php echo (($category=='Places')?' class="active"':''); ?> >
					<label class="menu-button" for="places">Places to Go <span class="fa fa-caret-down"></span></label>
					<input type ="checkbox" id="places" class="check" onclick="box(this)"/>
                    <ul>
                        <li><a <?php echo (($page=='StatueOfLiberty')?' class="active"':''); ?> href="statueOfLiberty.php">Statue Of Liberty</a></li>
                        <li><a <?php echo (($page=='Broadway')?' class="active"':''); ?> href="broadway.php">Broadway</a></li>
						<li <?php echo (($page=='Neighborhoods' || $page=='Chinatown' || $page=='Koreatown')?' class="active"':''); ?> >
							<label class="menu-button" for="neighborhoods">Neighborhoods <span class="fa fa-caret-down"></span></label>
							<input type ="checkbox" id="neighborhoods" class="check" onclick="box(this)"/>
                            <ul>
                                <li><a <?php echo (($page=='Chinatown')?' class="active"':''); ?> href="chinatown.php">ChinaTown</a></li> 
                                <li><a <?php echo (($page=='Koreatown')?' class="active"':''); ?> href="koreatown.php">KoreaTown</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li <?php echo (($category=='About')?' class="active"':''); ?> >
					<label class="menu-button" for="about">About <span class="fa fa-caret-down"></span></label>
					<input type ="checkbox" id="about" class="check" onclick="box(this)"/>
                    <ul>
                        <li><a <?php echo (($page=='Reference')?' class="active"':''); ?> href="reference.php">Reference</a></li>
                        <li><a <?php echo (($page=='Grading')?' class="active"':''); ?> href="grading.php">Grading</a></li>
						<li><a <?php echo (($page=='Comments')?' class="active"':''); ?> href="comments.php">Comments</a></li>
                    </ul>
                </li>
            </ul>
        </nav>