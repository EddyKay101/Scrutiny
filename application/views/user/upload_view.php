

<br><br><br><br><br><br><br><br><br>


<div class="wrapper wrapper-content animated fadeInRight ecommerce">


            <div class="ibox-content m-b-sm border-bottom">
            <?php 
            
             echo form_open_multipart('admin/music/insert');
           ?>
            
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="title">Title</label>
                            <input type="text" id="music_title" name="title" value="" placeholder="Title" class="form-control">
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <div class="col-sm-8" id="textarea_id">
                    
                    <label class="control-label" for="title">Description:</label>
                                                
                                                   <textarea style="width: 100%;" class="form-control" name="entry_text"  placeholder="Add Body" id=""></textarea>
                                                  
                                                
                                            </div><br><br>
                                            <div class="col-sm-8">
                        <div class="form-group">
                            <label class="control-label" for="img">Upload Image</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Select file</span>
        <span class="fileinput-exists">Change</span>
        <input type="file" name="userfile"/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
                        </div>
                    </div>
                                           
                    </div>
                     <div class="title-action">
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit"></div>
                    </form>
                </div>


