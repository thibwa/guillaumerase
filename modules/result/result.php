<div class="span12" style="margin-top: 20px">
    <h2 class="blog-post-title">Résultats</h2>
    <p class="lead blog-description">
            Description here ...
    </p>
</div>

<hr>

<div class="tabbable tabs-left">
    <ul class="nav nav-tabs" id="results">
        <li class="result-tab">
            <a href="javascript:;" data-toggle="tab">Tous</a>
        </li>
        <?php
            $result_item = array('1<sup>er</sup> Elite', '4<sup>e</sup> Espoir', '3<sup>e</sup> Espoir',
                 '2<sup>e</sup> Espoir', '1<sup>er</sup> Espoir');
            $counter = 0;
            foreach(glob('resources/result/new/*') as $year)
            {
                ?>
                 <li class="result-tab <?php echo $counter; ?>">
                    <a href="javascript:;" data-toggle="tab<?php echo $counter; ?>"><?php echo $result_item[$counter]; ?></a>
                </li>
                <?php
                $counter ++;
            }
        ?>
        <li class="result-tab <?php echo $counter; ?>">
			<a href="javascript:;" data-toggle="tab5">Anciens</a>
		</li>
    </ul>
	<div class="tab-content" id="result_content">
        <div class="tab-pane" id="tab" style="margin-left: 120px; display: none;">
            <ul class="list-group">
                <?php
                    foreach(glob('resources/result/new/*') as $resultFile)
                    {
                        $f = fopen($resultFile, "r");
                        $ext = pathinfo($resultFile);
                        if(strtolower($ext['extension']) == 'txt') {
                            while ($line = fgets($f, 1000)){
                                // Structure of result object
                                // [0] : city
                                // [1] : result
                                // [2] : superscript
                                // [3] : date in format dd/MM/yyyy
                                $resultObject = explode(" ", $line);
                                if(count($resultObject) >= 4){
                                    ?>
                                        <li class="list-group-item <?php if($resultObject[1] == 1) echo 'list-group-item-success'; ?>">
                                            <span class="badge"><?php echo $resultObject[1].'<sup>'.$resultObject[2].'</sup>'; ?></span>
                                            <h4 class="list-group-item-heading"><?php echo $resultObject[0]; ?></h4>
                                            <p class="result-post-meta"><?php echo $resultObject[3]; ?></p>
                                        </li>
                                    <?php
                                }
                            }
                        }
                    }
                ?>
            </ul>
        </div>
        <?php
			$counter = 0;
			foreach(glob('resources/result/new/*') as $resultFile)
			{
				$f = fopen($resultFile, "r");
				$ext = pathinfo($resultFile);
				if(strtolower($ext['extension']) == 'txt') {
					?>
						<div class="tab-pane" id="tab<?php echo $counter; ?>" style="margin-left: 120px; display: none;">
							<ul class="list-group">
								<?php
								while ($line = fgets($f, 1000)){
									// Structure of result object
									// [0] : city
									// [1] : result
									// [2] : superscript
									// [3] : date in format dd/MM/yyyy
									$resultObject = explode(" ", $line);
									if(count($resultObject) >= 4){
										?>
											 <li class="list-group-item <?php if($resultObject[1] == 1) echo 'list-group-item-success'; ?>">
												<span class="badge"><?php echo $resultObject[1].'<sup>'.$resultObject[2].'</sup>'; ?></span>
												<h4 class="list-group-item-heading"><?php echo $resultObject[0]; ?></h4>
												<p class="result-post-meta"><?php echo $resultObject[3]; ?></p>
											</li>
										<?php
									}
								}
								?>
							</ul>
						</div>
					<?php
					$counter ++;
				}
			}	
		?>
		<?php 
			$f = fopen('resources/result/old/result.txt', "r");
			$ext = pathinfo($resultFile);
			if(strtolower($ext['extension']) == 'txt') {
		?>
		<div class="tab-pane" id="tab<?php echo $counter; ?>" style="margin-left: 120px; display: none;">
			<ul class="list-group">
				<?php
				while ($line = fgets($f, 1000)){
					// Structure of result object
					// [0] : city
					// [1] : result
					// [2] : superscript
					// [3] : date in format dd/MM/yyyy
					$resultObject = explode(" ", $line);
					if(count($resultObject) >= 4){
						?>
							 <li class="list-group-item <?php if($resultObject[1] == 1) echo 'list-group-item-success'; ?>">
								<span class="badge"><?php echo $resultObject[1].'<sup>'.$resultObject[2].'</sup>'; ?></span>
								<h4 class="list-group-item-heading"><?php echo $resultObject[0]; ?></h4>
								<p class="result-post-meta"><?php echo $resultObject[3]; ?></p>
							</li>
						<?php
					}
				}
			}
		?>
			</ul>
		</div>
	</div>    
</div>

<?php
    if($_GET['filter'] == ""){ ?>
        <script>
            $( document ).ready(function () {
                jQuery('.result-tab').first().addClass('active');
                $('#result_content').children().first().addClass('active');
                $('#result_content').children().first().show();
            });
        </script>
<?php
    } else { ?>
        <script>
            $( document ).ready(function () {
                $(".<?php echo $_GET['filter']; ?>").addClass('active');
                $("#tab<?php echo $_GET['filter']; ?>").addClass('active');
                $("#tab<?php echo $_GET['filter']; ?>").show();
            });
        </script>
<?php
    }
?>