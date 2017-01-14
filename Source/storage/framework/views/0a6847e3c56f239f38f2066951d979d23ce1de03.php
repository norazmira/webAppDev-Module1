<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey  on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
      The codes are free, but we require linking to our web site.
      Why to Link?
      A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
      Where to Put the Link?
      home, about, credits... or in a good page that you want
      THANK YOU MY FRIEND!
    -->
    <title>contact details page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body{
    margin-top:20px;
    background:#f5f7fa;
}
.panel.panel-default {
    border-top-width: 3px;
}
.panel {
    box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084);
    border: 0;
    border-radius: 4px;
    margin-bottom: 16px;
}
.thumb96 {
    width: 96px!important;
    height: 96px!important;
}
.thumb48 {
    width: 48px!important;
    height: 48px!important;
}
    </style>
</head>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-right">
                    <div class="btn-group dropdown" uib-dropdown="dropdown">
                        <button class="btn btn-link dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><em class="fa fa-ellipsis-v fa-lg text-muted"></em></button>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeInLeft" role="menu">
                            <li><a href=""><span class="text-warning">Delete contact</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="h4 text-center">Contact Information</div>
                <div class="row pv-lg">


                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>     
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


                <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form class="form-horizontal ng-pristine ng-valid">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact1" type="text" placeholder="Audrey Hunt">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact2">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact2" type="text" placeholder="mail@example.com">
                                </div>
                            </div>
                        
                         
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact7">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact7" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact8">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact8" type="password" placeholder="Password">
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-info" type="submit">Update</button>
                                </div>
                            </div>

                        </form>
                        <div class="text-right"><a class="text-muted" href="#">Delete this contact?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  
</script>
</body>
</html>