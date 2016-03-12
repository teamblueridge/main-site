<?php include 'header.php'; ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Team BlueRidge</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-advanced">
                <li><a href="/the-team.html">The Team</a></li>
                <li><a href="/contribute.html">Contribute</a></li>
                <li><a href="/contact.html">Contact</a></li>
                <li><a href="https://blog.teamblueridge.org/">Blog</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container main body">
    <div class="lead col-sm-6">
        <h1>Welcome</h1>
        <p>We are a group of mobile and web developers learning together to create new and better projects.
            Our largest project is currently <a href="https://play.google.com/store/apps/details?id=org.teamblueridge.pasteitapp">Paste It</a>, an app for
            uploading text to <a href="https://github.com/claudehohl/Stikked">Stikked</a>. We welcome all contributions
            to any works.</p>
    </div>
    <div class="tbrintro col-sm-4">
        <p><a class="btn btn-primary btn-lg pull-right" href="contribute.html" role="button">Contribute &raquo;</a></p><br/>
    </div>

    <div class="container">
        <div class="row our-services">
            <div class="col-sm-12">
                <h4 class="headline"><span>Some of our services</span></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-picture"></i>
                                <div class="service-desc">
                                    <h5>Redmine</h5>
                                    <p><a href="https://redmine.teamblueridge.org">This platform</a> hosts all our projects, and also services as a wiki for all sorts of information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-refresh"></i>
                                <div class="service-desc">
                                    <h5>Gerrit</h5>
                                    <p><a href="https://review.teamblueridge.org">This code review</a> system allows anyone to easily push code changes to open source git projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-desktop"></i>
                                <div class="service-desc">
                                    <h5><a href="">Jenkins</a></h5>
                                    <p><a href="https://jenkins.teamblueridge.org">This buildbox</a> allows you to compile code on another machine then yours. Ideal for creating ROMs and such.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-gear"></i>
                                <div class="service-desc">
                                    <h5>Stikked</h5>
                                    <p><a href="https://paste.teamblueridge.org">A place</a> to share code, text, ... Simple, secure and fast. See also <a href="https://play.google.com/store/apps/details?id=org.teamblueridge.pasteitapp">Paste It</a>, its companion app.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-warning-sign"></i>
                                <div class="service-desc">
                                    <h5>Status page</h5>
                                    <p>Displays a list of the current status of all our services. Something is down? You see it right <a href="https://status.teamblueridge.org">here</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-plus"></i>
                                <div class="service-desc">
                                    <h5>Other stuff</h5>
                                    <p>All our projects are open source and hosted on <a href="https://github.com/teamblueridge">GitHub</a>. We are constantly working on new things.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->

<?php include 'footer.php'; ?>