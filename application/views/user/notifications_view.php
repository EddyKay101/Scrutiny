
<br><br><br><br><br><br><br>

<?php
if($notifications):
    
?>

<div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Notifications</h5>
                        <?php
                        foreach ($notification_count as $notification):
                        ?>
                        <div class="ibox-tools">
                           
                        </div>
                    </div>

                    <div class="ibox-content inspinia-timeline">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-bell"></i>
                                    6:00 am
                                    <br/>
                                    <small class="text-navy">2 hour ago</small>
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                    <p><?php echo $notification['username']." is following you";?></p>

                                    
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            </div>
        </div>
         <?php
        endforeach;
        ?>
        <?php
        else:
            ?>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Notifications</h5>
                        
                        <div class="ibox-tools">
                            
                        </div>
                    </div>

                    <div class="ibox-content inspinia-timeline">

                        <div class="timeline-item">
                              <div class="text-center article-title">
                            
                                <h1>
                                    You have no Notifications!
                                </h1>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            </div>
        </div>

        <?php
        endif;
        ?>
