        <nav class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <div class="nav-group">
                        <a class="brand" href="#"><h2><?php print $data['title']; ?></h2></a>
                        <?php print $data['nav']; ?>
                    </div>
                </div>
            </div>
        </nav>
        <section id="app" class="container-fluid">
            <div class="row-fluid">
                <div>
                    <div id="default-pane" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#default-pane" data-slide-to="0" class="active"></li>
                            <li data-target="#default-pane" data-slide-to="1"></li>
                            <li data-target="#default-pane" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img class="bold-image" src="../assets/base/img/02.jpg" />
                                <div class="carousel-caption text-center">
                                    <h4>Finding innovative solutions</h4>
                                    <p>Stuck on a problem? We can guide you towards easy to implement solutions for your business needs.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="bold-image" src="../assets/base/img/01.jpg" />
                                <div class="carousel-caption text-center">
                                    <h4>Design Driven Development</h4>
                                    <p>Designing your software is an important step in the conception of your ideal application. Need advice or
                                        a plan? We can help you figure out the best way to get your application running efficiently.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="bold-image" src="../assets/base/img/03.jpg" />
                                <div class="carousel-caption text-center">
                                    <h4>Utilizing Resources</h4>
                                    <p>Find the resources you need to get your code running. We provide a rich set of resources to developers who
                                        wish to use the latest and greatest in an rapidly growing field.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#default-pane" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#default-pane" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span3 pull-left">
                    <ul class="nav nav-list">
                        <li class="nav-header">Recent News</li>
                        <li class="active"><a href="#">August 2013</a></li>
                        <li>July 2013</li>
                        <li>June 2013</li>
                    </ul>
                </div>
                <div class="span9 pull-right">
                    <?php
                        print $data['entries']; 
                    ?>
                </div>
            </div>
        </section>
        