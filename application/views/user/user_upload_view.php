        <title>Scrutiny | Upload Track</title>
        <div class="page-container">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Upload Music</h5>
                            </div>
                            <div class="ibox-content">



                                <?php 
            
                                    echo form_open_multipart('user/uploads/insert');
                                    ?>
                                <form role="form" id="form">
                                    <div class="form-group"><label>Artist</label> <input type="artist"
                                            class="form-control" name="artist" required></div>
                                    <div class="form-group"><label>Title</label> <input type="title"
                                            class="form-control" name="title" required=""></div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="col-md-8 fileinput fileinput-new input-group"
                                            data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">

                                                <input type="file" name="userfile" />
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Track</label>
                                        <div class="col-md-8 fileinput fileinput-new input-group"
                                            data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">

                                                <input type="file" name="usertrack" />
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    <input class="button rounded-item" type="submit" name="submit" id="submit"
                                        value="Upload">
                            </div><br>
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>