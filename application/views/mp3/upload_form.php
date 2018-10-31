 <?php echo $error;?>
            <?php echo form_open_multipart('upload/do_upload');?>
            <form>
                <div class="row">
           			<div class="col-sm-4">
           			<div class="form-group">
                            <label class="control-label" for="title">Upload Image</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Select file</span>
        <span class="fileinput-exists">Change</span>
        <input type="file" name="fileField"/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
                        </div>