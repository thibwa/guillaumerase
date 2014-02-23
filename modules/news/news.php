<div class="blog-header">
	<h1 class="blog-title">Actualités</h1>
	<p class="lead blog-description">
		Toute mon actualité est affichée ici.
	</p>
</div>
<div class="row">

	<div class="col-sm-8 blog-main">
        <?php
        $counter=0;
        foreach(glob('resources/news/*') as $month)
        {
            echo '<div class="newsByMonth archive'.$counter.'"; style="display: none;">';
            foreach(glob($month.'/*') as $newFile)
            {
            ?>
                <div class="blog-post">
                <?php
                    $f = fopen($newFile, "r");
                    $ext = pathinfo($newFile);
                    if(strtolower($ext['extension']) == 'html') {
                        echo file_get_contents($newFile, FILE_USE_INCLUDE_PATH);
                    }
                ?>
                </div>
            <?php
            }
            echo '</div>';
            $counter++;
        }
        ?>
	</div>
	<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>Archives</h4>
            <ol class="list-unstyled archive-news">
                <?php
                    $counter=0;
                    foreach(glob('resources/news/*') as $month)
                    {
                        $path_parts = pathinfo($month);
                        $dir = $path_parts['basename'];
                    ?>
                    <li>
                        <a href="javascript:;" data-toggle="archive<?php echo $counter; ?>"><?php echo $dir; ?></a>
                    </li>
                    <?php
                    $counter++;
                    }
                ?>
            </ol>
        </div>
	</div>
</div>