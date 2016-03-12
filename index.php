<?php
function checkOnline($domain) {
   $curlInit = curl_init($domain);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   //get answer
   $response = curl_exec($curlInit);

   curl_close($curlInit);
   if ($response) return false;
   return true;
}

$blog = 'http://blog.teamblueridge.org';
$code = 'http://github.com/teamblueridge';
$gerrit = 'http://review.teamblueridge.org';
$jenkins = 'http://jenkins.teamblueridge.org';
$redmine = 'http://redmine.teamblueridge.org';
$stikked = 'http://paste.teamblueridge.org';
$down = '<code>This service is down!</code>';

$pagetitle = 'Team BlueRidge - Simply Breathtaking';
include 'header.php'; 
?>

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
                                    <p><a href="https://redmine.teamblueridge.org">This platform</a> hosts all our projects, and also services as a wiki for all sorts of information.
                                    <?php if(checkOnline($redmine)) {echo $down;}?></p>
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
                                    <p><a href="https://review.teamblueridge.org">This code review</a> system allows anyone to easily push code changes to open source git projects.
                                    <?php if(checkOnline($gerrit)) {echo $down;}?></p>
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
                                    <p><a href="https://jenkins.teamblueridge.org">This buildbox</a> allows you to compile code on another machine then yours. Ideal for creating ROMs and such.
                                    <?php if(checkOnline($jenkins)) {echo $down;}?></p>
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
                                    <p><a href="https://paste.teamblueridge.org">A place</a> to share code, text, ... Simple, secure and fast. See also <a href="https://play.google.com/store/apps/details?id=org.teamblueridge.pasteitapp">Paste It</a>, its companion app.
                                    <?php if(checkOnline($stikked)) {echo $down;}?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-rss"></i>
                                <div class="service-desc">
                                    <h5>Blog</h5>
                                    <p>Want to inform you on the recent news? You can read it on our <a href="https://blog.teamblueridge.org">blog</a>.
                                    <?php if(checkOnline($blog)) {echo $down;}?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="service-item">
                                <i class="icon-code"></i>
                                <div class="service-desc">
                                    <h5>Code</h5>
                                    <p>All our projects are open source and hosted on <a href="https://github.com/teamblueridge">GitHub</a>. We are constantly working on new things.
                                    <?php if(checkOnline($code)) {echo $down;}?></p>
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