<form action="<?= $BASE.'/user/create' ?>" method="post" class="form-horizontal">
 
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Name</span>
        <input type="text" id="name" name="username" value="" class="input-xlarge" />
    </div>
    <br/><br/>
 
    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i> Email</span>
        <input type="text" id="email" name="email" value="" class="input-xlarge" />
    </div>
    <br/><br/>
    
    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i> Password</span>
        <input type="text" id="email" name="password" value="" class="input-xlarge" />
    </div>
    <br/><br/>
 
   
    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Add User</button>
        </div>
    </div>
 
</form>