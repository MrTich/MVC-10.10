                <h1>Categories</h1>
                <ul>
                    <?php 
                        foreach ($dataloai as $key => $value) {
                            if ($value['tenloai']=="Tin Học"){
                                ?> <li><a href="tinhoc.php"><?php
                            echo $value['tenloai']."<br>";

                           ?> </a></li> <?php
                            }
                            else {
                                ?> <li><a href="#"><?php
                            echo $value['tenloai']."<br>";

                           ?> </a></li> <?php
                            }
                            
                        }
                    ?>
                    <!-- <li><a href="subpage.html">AAA accumsan urna</a></li>
                    <li><a href="subpage.html">Proin vulputate justo</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
                    <li><a href="#">Aliquam tristique dolor</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">Sed pellentesque placerat</a></li>
                    <li><a href="#">Suspen disse</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li> -->
            	</ul>