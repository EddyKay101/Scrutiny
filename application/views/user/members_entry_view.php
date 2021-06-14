<?php
if ($members['media_img'] != "") {
    $img = $members['media_img'];
} else {
    $img = "blank_user.png";
}
?>
<?php
$session = $this->session->userdata('user_id');
//$friends = 0;

if ($session == $members['user_id']):

?>
<title>Scrutiny | <?php echo $members['username']; ?></title>

<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="profile-wrapper">
                    <div class="profile-title text-center">
                        <h5>Profile Detail</h5>
                    </div>
                    <div class="profile-body">
                        <div class="img-wrapper">
                            <img alt="image" class="img-fluid"
                                src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                        </div>

                        <div class="profile-content mt-5 mb-5">
                            <div class="profile-info">
                                <div class="left">
                                    <div>
                                        <h4><strong><?php echo $members['username']; ?></strong></h4>
                                        <p><i class="fa fa-map-marker"></i> <?php echo $members['Location']; ?></p>
                                    </div>
                                    <div>
                                        <h5>
                                            About
                                        </h5>
                                        <p>
                                            <?php echo $members['info']; ?>
                                        </p>
                                    </div>

                                </div>
                                <div class="right">
                                    <h5><strong><i class="fa fa-headphones mr-3"
                                                aria-hidden="true"></i><?php echo $count_tracks; ?></strong> Tracks
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $count_friends; ?></strong>
                                        Following
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $count_followers; ?></strong>
                                        Followers</h5>
                                </div>
                            </div>
                        </div>


                        <div class="profile-content">

                            <div class="profile-mgt-menu">
                                <div class="left">
                                    <p><a class="profile-mgt"
                                            href="<?php echo site_url('user/members/edit/' . $members['username']); ?>"
                                            id=""><i class="fa fa-list-alt mr-3" aria-hidden="true"></i>Edit
                                            Information</a></p>




                                    <p><a class="profile-mgt" href="<?php echo site_url('uploadMusic'); ?>"><i
                                                class=" fa fa-headphones mr-3" aria-hidden="true"></i>Upload Music</a>
                                    </p>
                                </div>
                                <div class="right">
                                    <p><a class="profile-mgt" href="<?php echo site_url('user/chats/view_chats'); ?>"
                                            id=""><i class="fa fa-envelope mr-3" aria-hidden="true"></i>Messages</a>
                                    </p>
                                    <p><a data-toggle="modal" data-target="#post-modal" class="profile-mgt" href=""><i
                                                class="fa fa-clipboard mr-3" aria-hidden="true"></i>Status</a></p>

                                    <p><a class="profile-mgt" href="<?php echo site_url('dashboard'); ?>" id=""><i
                                                class="fas fa-tachometer-alt mr-3"></i></i>Dashboard</a></p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="post-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">What are you thinking?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <textarea class="modal-post-text" name="content" id="modal-text" cols="40" rows="3">
                                    </textarea>
                            <!-- <div id="text" contentEditable="true" hidefocus="true">
                                    </div> -->
                        </div>
                        <div class="modal-footer">
                            <button id="post-modal-button" type="submit" class="button">Post</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 col-sm-12">
                <div class="activity-wrapper">
                    <div class="activity-title">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs panel-tabs">
                                            <li class="active mr-5"><a href="#tab-1" data-toggle="tab">Activities</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <div class="tab-content">
                                        <div class="left-content col-md-4 col-sm-12 connections">
                                            <div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Following</h3>
                                                    <small><i class="fa fa-tim"></i><?php echo $count_friends; ?>
                                                        following.</small>

                                                </div>


                                                <div class="follow-content">
                                                    <?php
foreach ($friends as $friend):
    if ($friend['media_img'] != "") {
        $img = $friend['media_img'];
    } else {
        $img = "blank_user.png";
    }
    ?>
                                                    <div class="feed-element mb-3 mr-3">
                                                        <div class="follow-img-container ">

                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $friend['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $friend['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>
                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Followers</h3>

                                                    <small><i class="fa fa-tim"></i><?php echo $count_followers; ?>
                                                        followers</small>
                                                </div>

                                                <div class="follow-content">
                                                    <?php

foreach ($followers as $follower):
    if ($follower['media_img'] != "") {
        $img = $follower['media_img'];
    } else {
        $img = "blank_user.png";
    }

    ?>
                                                    <div class="feed-element mb-3 mr-3">

                                                        <div class="follow-img-container ">
                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $follower['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $follower['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>

                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>

                                                <!-- Tracks -->
                                                <div class="single-album">
                                                    <div class="noo-main single single-noo_album">
                                                        <div class="noo_album">
                                                            <div class="album-intro col-xs-12">
                                                                <div class="album-intro-wrap">
                                                                    <div class="album-media-player">
                                                                        <div class="single-album-playlist">
                                                                            <ul>
                                                                                <?php
$i = 0;
foreach ($tracks as $track):
    ++$i;

    ?>

                                                                                <li id="album_<?php echo $i; ?>"
                                                                                    data-id="album_<?php echo $i; ?>"
                                                                                    data-artist="<a href=&quot;#&quot;><?php echo $track['artist']; ?></a>"
                                                                                    data-file="<?php echo base_url(); ?>/public/user_tracks/<?php echo $track['location']; ?>"
                                                                                    data-thumb="<img width=&quot;768&quot; height=&quot;1000&quot; src=&quot;<?php echo base_url(); ?>public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot;/>"
                                                                                    data-name="<?php echo $track['title']; ?>"
                                                                                    data-url="#"
                                                                                    data-album="<?php echo $track['artist']; ?>">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="noodata-play">
                                                                                        <span
                                                                                            class="current-active-play">
                                                                                            <i class="fa fa-play"></i>
                                                                                        </span>

                                                                                        <small class="track-title">
                                                                                            <?php echo $track['title']; ?></small>
                                                                                    </a>
                                                                                    <span class="album-meta">

                                                                                        <?php if ($track['downloadable'] == "true"):
    ?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>
                                                                                            <i
                                                                                                class="fas fa-download"></i>
                                                                                        </a>
                                                                                        <?php
else:
?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>

                                                                                        </a>
                                                                                        <?php
endif;
?>
                                                                                    </span>
                                                                                </li>
                                                                                <?php
endforeach;
?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tracks -->
                                            </div>
                                        </div>


                                        <!-- Activity Section -->
                                        <div class="col-md-8 col-sm-12 mt-3 activity">

                                            <div class="feed">


                                                <?php
$segment = $this->uri->segment(2);
foreach ($posts as $post):
    if ($post['media_img'] != "") {
        $img = $post['media_img'];
    } else {
        $img = "blank_user.png";
    }
    ?>


                                                <div class="social-feed-box">
                                                    <?php $data = array('onsubmit' => "checkIfEmpty(this)");?>
                                                    <?php echo form_open('user/members/create/' . $post['post_id'], $data); ?>
                                                    <input type="hidden" name="comms"
                                                        value="<?php echo $post['post_id']; ?>">
                                                    <input type="hidden" name="seg" value="<?php echo $segment; ?>">
                                                    <div class="social-avatar">
                                                        <div class="avatar-element">
                                                            <div class="social-img-container">
                                                                <a href="">
                                                                    <img alt="image" class="img-circle"
                                                                        src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <div class="user-comment">
                                                            <small
                                                                class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $post['date_created']); ?></small>
                                                            <div class="social-body">
                                                                <p id="p_post">
                                                                    <?php echo $post['entry_text']; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-response" id="comment_section">
                                                        <?php
    foreach ($post_comments as $comments):
        if ($post['post_id'] == $comments['post_id']):
            if ($comments['media_img'] != "") {
                $img = $comments['media_img'];
            } else {
                $img = "blank_user.png";
            }
            ?>
                                                        <div class="social-comment">
                                                            <div class="avatar-element  mr-3">
                                                                <div class="social-img-container">
                                                                    <a
                                                                        href="<?php echo site_url('/members/' . $comments['user_id']); ?>">
                                                                        <img alt="image" class="img-circle"
                                                                            src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="comment-body">
                                                                <div class="user-left">
                                                                    <a
                                                                        href="<?php echo base_url(); ?>/members/<?php echo $comments['user_id']; ?>">
                                                                        <?php echo $comments['username']; ?>
                                                                    </a>
                                                                </div>

                                                                <?php echo $comments['txt']; ?>

                                                                <div class="user-right">
                                                                    <small
                                                                        class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $comments['date']); ?></small>
                                                                </div>


                                                            </div>

                                                        </div>
                                                        <?php endif;
    endforeach;?>

                                                        <div class="social-comment">


                                                            <div class="comment-text">

                                                                <textarea onkeyup="enableDisable(this)"
                                                                    class="form-control" placeholder="Write comment..."
                                                                    name="txt" id="comment_textarea"></textarea>
                                                                <div class="button-container">
                                                                    <button onload="disableBtn()"
                                                                        class="comment-btn mt-3" type="submit"
                                                                        id="c_submit" disabled="disabled"
                                                                        onclick="checkIfEmpty()">Post</button>
                                                                </div>

                                                            </div>



                                                        </div>
                                                    </div>

                                                    <?php echo form_close(); ?>
                                                </div>

                                                <?php

endforeach;
?>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Is friend -->
<?php
    elseif ($members && $isfriend):
    ?>
<title>Scrutiny | <?php echo $members['username']; ?></title>

<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="profile-wrapper">
                    <div class="profile-title text-center">
                        <h5>Profile Detail</h5>
                    </div>
                    <div class="profile-body">
                        <div class="img-wrapper">
                            <img alt="image" class="img-fluid"
                                src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                        </div>

                        <div class="profile-content mt-5 mb-5">
                            <div class="profile-info">
                                <div class="left">
                                    <div>
                                        <h4><strong><?php echo $members['username']; ?></strong></h4>
                                        <p><i class="fa fa-map-marker"></i> <?php echo $members['Location']; ?></p>
                                    </div>
                                    <div>
                                        <h5>
                                            About
                                        </h5>
                                        <p>
                                            <?php echo $members['info']; ?>
                                        </p>
                                    </div>

                                </div>
                                <div class="right">
                                    <h5><strong><i class="fa fa-headphones mr-3"
                                                aria-hidden="true"></i><?php echo $count_viewy_tracks; ?></strong>
                                        Tracks
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $u_count_friends; ?></strong>
                                        Following
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $u_count_followers; ?></strong>
                                        Followers</h5>
                                </div>
                            </div>
                        </div>


                        <div class="profile-content">

                            <div class="user-button py-3">
                                <div>
                                    <input type="hidden" name="see" id="see" value="<?php echo $members['user_id']; ?>">
                                    <a href="<?php echo base_url() . 'chats/' . $members['user_id']; ?>"
                                        class="profile-mgt"><i class="fa fa-envelope"></i>
                                        Message</a>
                                </div>

                                <div>
                                    <?php
echo form_open_multipart('user/members/unfollow');

?>
                                    <input type="hidden" name="friend_id" value="<?php echo $members['user_id']; ?>" />
                                    <button type="submit" class="button rounded-item"><i class="fas fa-unlink"></i>
                                        Unfollow</button>

                                    <!-- <a href="<?php echo base_url() . 'user/members/unfollow';?>"
                                            class="profile-mgt"><i class="fas fa-unlink"></i>
                                            Unfollow</a> -->
                                    <?php
echo form_close();
?>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="post-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">What are you thinking?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <textarea class="modal-post-text" name="content" id="modal-text" cols="40" rows="3">
                                    </textarea>
                            <!-- <div id="text" contentEditable="true" hidefocus="true">
                                    </div> -->
                        </div>
                        <div class="modal-footer">
                            <button id="post-modal-button" type="submit" class="button">Post</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 col-sm-12">
                <div class="activity-wrapper">
                    <div class="activity-title">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs panel-tabs">
                                            <li class="active mr-5"><a href="#tab-1" data-toggle="tab">Activities</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <div class="tab-content">
                                        <div class="left-content col-md-4 col-sm-12 connections">
                                            <div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Following</h3>
                                                    <small><i class="fa fa-tim"></i><?php echo $u_count_friends; ?>
                                                        following.</small>

                                                </div>


                                                <div class="follow-content">
                                                    <?php
foreach ($u_friends as $u_friend):
    if ($u_friend['media_img'] != "") {
        $img = $u_friend['media_img'];
    } else {
        $img = "blank_user.png";
    }
    ?>
                                                    <div class="feed-element mb-3 mr-3">
                                                        <div class="follow-img-container ">

                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $u_friend['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $u_friend['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>
                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Followers</h3>

                                                    <small><i class="fa fa-tim"></i><?php echo $u_count_followers; ?>
                                                        followers</small>
                                                </div>

                                                <div class="follow-content">
                                                    <?php

foreach ($u_followers as $u_follower):
    if ($u_follower['media_img'] != "") {
        $img = $u_follower['media_img'];
    } else {
        $img = "blank_user.png";
    }

    ?>
                                                    <div class="feed-element mb-3 mr-3">

                                                        <div class="follow-img-container ">
                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $u_follower['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $u_follower['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>

                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>

                                                <!-- Tracks -->
                                                <div class="single-album">
                                                    <div class="noo-main single single-noo_album">
                                                        <div class="noo_album">
                                                            <div class="album-intro col-xs-12">
                                                                <div class="album-intro-wrap">
                                                                    <div class="album-media-player">
                                                                        <div class="single-album-playlist">
                                                                            <ul>
                                                                                <?php
$i = 0;
foreach ($viewy_track as $track):
    ++$i;

    ?>

                                                                                <li id="album_<?php echo $i; ?>"
                                                                                    data-id="album_<?php echo $i; ?>"
                                                                                    data-artist="<a href=&quot;#&quot;><?php echo $track['artist']; ?></a>"
                                                                                    data-file="<?php echo base_url(); ?>/public/user_tracks/<?php echo $track['location']; ?>"
                                                                                    data-thumb="<img width=&quot;768&quot; height=&quot;1000&quot; src=&quot;<?php echo base_url(); ?>public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot;/>"
                                                                                    data-name="<?php echo $track['title']; ?>"
                                                                                    data-url="#"
                                                                                    data-album="<?php echo $track['artist']; ?>">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="noodata-play">
                                                                                        <span
                                                                                            class="current-active-play">
                                                                                            <i class="fa fa-play"></i>
                                                                                        </span>

                                                                                        <small class="track-title">
                                                                                            <?php echo $track['title']; ?></small>
                                                                                    </a>
                                                                                    <span class="album-meta">

                                                                                        <?php if ($track['downloadable'] == "true"):
    ?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>
                                                                                            <i
                                                                                                class="fas fa-download"></i>
                                                                                        </a>
                                                                                        <?php
else:
?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>

                                                                                        </a>
                                                                                        <?php
endif;
?>
                                                                                    </span>
                                                                                </li>
                                                                                <?php
endforeach;
?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tracks -->
                                            </div>
                                        </div>


                                        <!-- Activity Section -->
                                        <div class="col-md-8 col-sm-12 mt-3 activity">

                                            <div class="feed">


                                                <?php
$segment = $this->uri->segment(2);
foreach ($viewer_posts as $posti):
    if ($posti['media_img'] != "") {
        $img = $posti['media_img'];
    } else {
        $img = "blank_user.png";
    }
    ?>


                                                <div class="social-feed-box">
                                                    <?php $data = array('onsubmit' => "checkIfEmpty(this)");?>
                                                    <?php echo form_open('user/members/create/' . $posti['post_id'], $data); ?>
                                                    <input type="hidden" name="comms"
                                                        value="<?php echo $posti['post_id']; ?>">
                                                    <input type="hidden" name="seg" value="<?php echo $segment; ?>">
                                                    <div class="social-avatar">
                                                        <div class="avatar-element mr-3">
                                                            <div class="social-img-container">
                                                                <a href="">
                                                                    <img alt="image" class="img-circle"
                                                                        src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="user-comment">
                                                            <small
                                                                class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $posti['date_created']); ?></small>
                                                            <div class="social-body">
                                                                <p id="p_post">
                                                                    <?php echo $posti['entry_text']; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-response" id="comment_section">
                                                        <?php
    foreach($post_comments as $comments):
        if($posti['post_id'] == $comments['post_id']): 
      if($comments['media_img'] != "")
                 {
                     $img = $comments['media_img'];
                 }

                 else
                 {
                     $img = "blank_user.png";
                 }
            ?>
                                                        <div class="social-comment">
                                                            <div class="avatar-element  mr-3">
                                                                <div class="social-img-container mr-3">
                                                                    <a href="">
                                                                        <img alt="image" class="img-circle"
                                                                            src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="comment-body">
                                                                <div class="user-left">
                                                                    <a
                                                                        href="<?php echo base_url(); ?>/members/<?php echo $comments['user_id']; ?>">
                                                                        <?php echo $comments['username']; ?>
                                                                    </a>
                                                                </div>

                                                                <?php echo $comments['txt']; ?>

                                                                <div class="user-right">
                                                                    <small
                                                                        class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $comments['date']); ?></small>
                                                                </div>


                                                            </div>

                                                        </div>
                                                        <?php endif;
    endforeach;?>

                                                        <div class="social-comment">


                                                            <div class="comment-text">

                                                                <textarea onkeyup="enableDisable(this)"
                                                                    class="form-control" placeholder="Write comment..."
                                                                    name="txt" id="comment_textarea"></textarea>
                                                                <div class="button-container">
                                                                    <button onload="disableBtn()"
                                                                        class="comment-btn mt-3" type="submit"
                                                                        id="c_submit" disabled="disabled"
                                                                        onclick="checkIfEmpty()">Post</button>
                                                                </div>

                                                            </div>



                                                        </div>


                                                    </div>

                                                    <?php echo form_close(); ?>
                                                </div>

                                                <?php

endforeach;
?>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
        else:
        ?>
<!-- All others -->
<title>Scrutiny | <?php echo $members['username']; ?></title>

<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="profile-wrapper">
                    <div class="profile-title text-center">
                        <h5>Profile Detail</h5>
                    </div>
                    <div class="profile-body">
                        <div class="img-wrapper">
                            <img alt="image" class="img-fluid"
                                src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                        </div>

                        <div class="profile-content mt-5 mb-5">
                            <div class="profile-info">
                                <div class="left">
                                    <div>
                                        <h4><strong><?php echo $members['username']; ?></strong></h4>
                                        <p><i class="fa fa-map-marker"></i> <?php echo $members['Location']; ?>
                                        </p>
                                    </div>
                                    <div>
                                        <h5>
                                            About
                                        </h5>
                                        <p>
                                            <?php echo $members['info']; ?>
                                        </p>
                                    </div>

                                </div>
                                <div class="right">
                                    <h5><strong><i class="fa fa-headphones mr-3"
                                                aria-hidden="true"></i><?php echo $count_viewy_tracks; ?></strong>
                                        Tracks
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $u_count_friends; ?></strong>
                                        Following
                                    </h5>

                                    <h5><strong><i class="fa fa-users mr-3"
                                                aria-hidden="true"></i><?php echo $u_count_followers; ?></strong>
                                        Followers</h5>
                                </div>
                            </div>
                        </div>

                        <?php
                                if ($followers):
                                ?>
                        <div class="profile-content">

                            <div class="user-button py-3">
                                <div>
                                    <input type="hidden" name="see" id="see" value="<?php echo $members['user_id']; ?>">
                                    <a href="<?php echo base_url() . 'chats/' . $members['user_id']; ?>"
                                        class="profile-mgt"><i class="fa fa-envelope"></i>
                                        Message</a>
                                </div>

                                <div>
                                    <?php
echo form_open_multipart('user/members/follow');

?>
                                    <input type="hidden" name="friend_id" value="<?php echo $members['user_id']; ?>" />
                                    <button type="submit" class="button rounded-item"><i
                                            class="fas fa-user-friends"></i>
                                        Follow</button>

                                    <!-- <a href="#" class="profile-mgt"><i class="fas fa-user-friends"></i>
                                                Follow</a> -->
                                    <?php
echo form_close();
?>
                                </div>

                            </div>

                        </div>
                        <?php
                                endif
                                ?>

                    </div>
                </div>
            </div>


            <div class="col-md-8 col-sm-12">
                <div class="activity-wrapper">
                    <div class="activity-title">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs panel-tabs">
                                            <li class="active mr-5"><a href="#tab-1" data-toggle="tab">Activities</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <div class="tab-content">
                                        <div class="left-content col-md-4 col-sm-12 connections">
                                            <div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Following</h3>
                                                    <small><i class="fa fa-tim"></i><?php echo $u_count_friends; ?>
                                                        following.</small>

                                                </div>


                                                <div class="follow-content">
                                                    <?php
foreach ($u_friends as $u_friend):
if ($u_friend['media_img'] != "") {
    $img = $u_friend['media_img'];
} else {
    $img = "blank_user.png";
}
?>
                                                    <div class="feed-element mb-3 mr-3">
                                                        <div class="follow-img-container ">

                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $u_friend['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $u_friend['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>
                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>
                                                <div class="follow-heading">
                                                    <h3><i class="fa fa fa-users"></i>Followers</h3>

                                                    <small><i class="fa fa-tim"></i><?php echo $u_count_followers; ?>
                                                        followers</small>
                                                </div>

                                                <div class="follow-content">
                                                    <?php

foreach ($u_followers as $u_follower):
if ($u_follower['media_img'] != "") {
    $img = $u_follower['media_img'];
} else {
    $img = "blank_user.png";
}

?>
                                                    <div class="feed-element mb-3 mr-3">

                                                        <div class="follow-img-container ">
                                                            <a class="aFollower"
                                                                href="<?php echo site_url('/members/' . $u_follower['user_id']); ?>"><span
                                                                    class="tooltiptext"><?php echo $u_follower['username']; ?></span><img
                                                                    alt="image" class="img-circle"
                                                                    src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>"></a>

                                                        </div>
                                                    </div>
                                                    <?php
endforeach;
?>
                                                </div>

                                                <!-- Tracks -->
                                                <div class="single-album">
                                                    <div class="noo-main single single-noo_album">
                                                        <div class="noo_album">
                                                            <div class="album-intro col-xs-12">
                                                                <div class="album-intro-wrap">
                                                                    <div class="album-media-player">
                                                                        <div class="single-album-playlist">
                                                                            <ul>
                                                                                <?php
$i = 0;
foreach ($viewy_track as $track):
++$i;

?>

                                                                                <li id="album_<?php echo $i; ?>"
                                                                                    data-id="album_<?php echo $i; ?>"
                                                                                    data-artist="<a href=&quot;#&quot;><?php echo $track['artist']; ?></a>"
                                                                                    data-file="<?php echo base_url(); ?>/public/user_tracks/<?php echo $track['location']; ?>"
                                                                                    data-thumb="<img width=&quot;768&quot; height=&quot;1000&quot; src=&quot;<?php echo base_url(); ?>public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot;/>"
                                                                                    data-name="<?php echo $track['title']; ?>"
                                                                                    data-url="#"
                                                                                    data-album="<?php echo $track['artist']; ?>">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="noodata-play">
                                                                                        <span
                                                                                            class="current-active-play">
                                                                                            <i class="fa fa-play"></i>
                                                                                        </span>

                                                                                        <small class="track-title">
                                                                                            <?php echo $track['title']; ?></small>
                                                                                    </a>
                                                                                    <span class="album-meta">

                                                                                        <?php if ($track['downloadable'] == "true"):
?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>
                                                                                            <i
                                                                                                class="fas fa-download"></i>
                                                                                        </a>
                                                                                        <?php
else:
?>
                                                                                        <a href="<?php echo $track['location']; ?>"
                                                                                            target="_blank" download>

                                                                                        </a>
                                                                                        <?php
endif;
?>
                                                                                    </span>
                                                                                </li>
                                                                                <?php
endforeach;
?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tracks -->
                                            </div>
                                        </div>


                                        <!-- Activity Section -->
                                        <div class="col-md-8 col-sm-12 mt-3 activity">

                                            <div class="feed">


                                                <?php
$segment = $this->uri->segment(2);
foreach ($viewer_posts as $posti):
if ($posti['media_img'] != "") {
    $img = $posti['media_img'];
} else {
    $img = "blank_user.png";
}
?>


                                                <div class="social-feed-box">
                                                    <?php $data = array('onsubmit' => "checkIfEmpty(this)");?>
                                                    <?php echo form_open('user/members/create/' . $posti['post_id'], $data); ?>
                                                    <input type="hidden" name="comms"
                                                        value="<?php echo $posti['post_id']; ?>">
                                                    <input type="hidden" name="seg" value="<?php echo $segment; ?>">
                                                    <div class="social-avatar">
                                                        <div class="avatar-element">
                                                            <div class="social-img-container">
                                                                <a href="">
                                                                    <img alt="image" class="img-circle"
                                                                        src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="user-comment">
                                                            <small
                                                                class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $posti['date_created']); ?></small>
                                                            <div class="social-body">
                                                                <p id="p_post">
                                                                    <?php echo $posti['entry_text']; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-response" id="comment_section">
                                                        <?php
foreach($post_comments as $comments):
    if($posti['post_id'] == $comments['post_id']): 
  if($comments['media_img'] != "")
             {
                 $img = $comments['media_img'];
             }

             else
             {
                 $img = "blank_user.png";
             }
 ?>
                                                        <div class="social-comment">
                                                            <div class="avatar-element  mr-3">
                                                                <div class="social-img-container mr-3">
                                                                    <a href="">
                                                                        <img alt="image" class="img-circle"
                                                                            src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="comment-body">
                                                                <div class="user-left">
                                                                    <a
                                                                        href="<?php echo base_url(); ?>/members/<?php echo $comments['user_id']; ?>">
                                                                        <?php echo $comments['username']; ?>
                                                                    </a>
                                                                </div>

                                                                <?php echo $comments['txt']; ?>

                                                                <div class="user-right">
                                                                    <small
                                                                        class="text-muted"><?php echo dateFormat('d/m/Y h:ia', $comments['date']); ?></small>
                                                                </div>


                                                            </div>

                                                        </div>
                                                        <?php endif;
endforeach;?>
                                                        <?php
    if ($session == $members['user_id']):
    ?>
                                                        <div class="social-comment">


                                                            <div class="comment-text">

                                                                <textarea onkeyup="enableDisable(this)"
                                                                    class="form-control" placeholder="Write comment..."
                                                                    name="txt" id="comment_textarea"></textarea>
                                                                <div class="button-container">
                                                                    <button onload="disableBtn()"
                                                                        class="comment-btn mt-3" type="submit"
                                                                        id="c_submit" disabled="disabled"
                                                                        onclick="checkIfEmpty()">Post</button>
                                                                </div>

                                                            </div>



                                                        </div>
                                                        <?php
endif
?>
                                                    </div>

                                                    <?php echo form_close(); ?>
                                                </div>

                                                <?php

endforeach;
?>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
    endif
    ?>

<script type="text/javascript">
$("#comment_textarea").keypress(function(e) {
    if (e.which == 13) {

        $("#c_submit").click();
        return false;
    }

});

$("#post-modal-button").click(function() {

    let data = {
        "content": $("#modal-text").val()
    };
    const postModalText = document.getElementById("modal-text");
    if (postModalText.value.trim() !== "") {

        $.ajax({
            type: "POST",
            url: base_url + "user/members/create_post",
            data: data,
            success: function(response) {
                window.location.reload();
            }
        });
    } else {
        postModalText.style.border = "1px solid red";
        return false;
    }

});


const commentBtn = document.querySelectorAll('.comment-btn');
let btnArr = Array.from(commentBtn);


function enableDisable(comment) {
    //Reference the Button.

    //Verify the TextBox value.
    if (comment.value.trim() !== "") {
        btnArr.forEach((btn) => {
            btn.disabled = false;
        });
    } else {
        btnArr.forEach((btn) => {
            btn.disabled = true;
        });
    }
};
</script>