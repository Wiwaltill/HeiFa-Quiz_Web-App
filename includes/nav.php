<div id="white-bar">
   	<!-- height: 100% and display: flex leads to this div not being displayed if completely empty! -->
    &nbsp;
</div>
<div id="bootsmenu">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
					<ul class="navbar-nav">
                        <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php" OR $_SERVER["SCRIPT_NAME"] == "indexPhone.php"): ?>
                            <li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						    </li>
                        <?php else: ?>
                            <li class="nav-item">
							    <a class="nav-link" href="index.php">Home</a>
						    </li>
                        <?php endif; ?>
                        <?php if ($_SERVER["SCRIPT_NAME"] == "/quiz.php"): ?>
                            <li class="nav-item">
								<a class="nav-link active" aria-current="page" href="quiz.php">Home</a>
						    </li>
                        <?php else: ?>
                            <li class="nav-item">
							    <a class="nav-link" href="quiz.php">Quiz</a>
						    </li>
                        <?php endif; ?>
                        <?php if ($_SERVER["SCRIPT_NAME"] == "/vq.php"): ?>
                            <li class="nav-item">
								<a class="nav-link active" aria-current="page" href="vq.php">Videoquiz</a>
						    </li>
                        <?php else: ?>
                            <li class="nav-item">
							    <a class="nav-link" href="vq.php">Videoquiz</a>
						    </li>
                        <?php endif; ?>
						<!--<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Infos</a>
						</li>-->
                        <?php if ($_SERVER["SCRIPT_NAME"] == "/infos.php"): ?>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="infos.php" id="dropdownNav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Infos <span class="sr-only">(aktuell)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownNav1">
                                    <a class="dropdown-item" href="infos.php#loesungenQuiz">Lösungen Quiz</a>
                                    <a class="dropdown-item" href="infos.php#loesungenVideoquiz">Lösungen Videoquiz</a>
                                </div>
                            </li>
                        <?php else: ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="infos.php" id="dropdownNav1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Infos</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="infos.php#loesungenQuiz">Lösungen Quiz</a></li>
									<li><a class="dropdown-item" href="infos.php#loesungenVideoquiz">Lösungen Videoquiz</a></li>
								</ul>
							</li>
                        <?php endif; ?>
					</ul>
				</div>
			</nav>
			<a class="logo1" href="https://heiligtumsfahrt-aachen.de" target="_blank">
    			<img src="assets/images/Logo_Heiligtumsfahrt.png" width="220" alt="">
  			</a>
			<a class="logo2" href="https://heiligtumsfahrt-aachen.de" target="_blank">
    			<img src="assets/images/Logo_Heiligtumsfahrt-Reverse.png" width="220" alt="">
  			</a>
			<a class="logo3" href="https://www.bistum-aachen.de" target="_blank">
    			<img src="assets/images/Logo_Bistum-Container.svg" width="430" alt="">
  			</a>
		</div>