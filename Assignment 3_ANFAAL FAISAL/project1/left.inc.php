            <aside class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                       
                       <?php   /* you will need to replace this hard-coded list with appropriate PHP */ 
                        for($i=0;$i<count($continents);$i++){
                            echo "<li class=\"list-group-item\">";
                            echo "<a href=\"#\">".$continents[$i]."</a>";
                            echo "</li>";
                        }
                       ?>
                       
                        <!-- <li class="list-group-item"><a href="#">Africa</a></li><li class="list-group-item"><a href="#">Asia</a></li><li class="list-group-item"><a href="#">Europe</a></li><li class="list-group-item"><a href="#">North America</a></li><li class="list-group-item"><a href="#">Oceania</a></li><li class="list-group-item"><a href="#">South America</a></li> -->
                        
                        
                    </ul>
                </div>
                <!-- end continents panel -->

                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                      
                       <?php   /* you will need to replace this hard-coded list with appropriate PHP */ 
                        foreach($countries as $abCountries=>$value){
                            echo "<li class=\"list-group-item\">";
                            echo "<a href=\"list.php?country=".$value."\" role=\"button\" class=\"btn btn-default\"> ".$value."</a>";
                            echo "</li>";
                        }
                       ?>
                       
                          <!-- <li class="list-group-item">
                          <a href="list.php?country=Canada">Canada</a>
                          </li>
                                  
                          <li class="list-group-item">
                          <a href="list.php?country=Germany">Germany</a>
                          </li>
                                  
                          <li class="list-group-item">
                          <a href="list.php?country=Greece">Greece</a>
                          </li>
                                  
                          <li class="list-group-item">
                          <a href="list.php?country=Italy">Italy</a>
                          </li>
                                  
                          <li class="list-group-item">
                          <a href="list.php?country=United Kingdom">United Kingdom</a>
                          </li>
                                  
                          <li class="list-group-item">
                          <a href="list.php?country=United States">United States</a>
                          </li> -->
                       
                        
                    </ul>
                </div>
                <!-- end continents panel -->
            </aside>