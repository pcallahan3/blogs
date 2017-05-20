<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
 
            <li <?php if ($page_head == 'User List'): ?><?php endif; ?>><a href="<?= $BASE.'/' ?>"><i class="icon-th icon-black"></i> Read</a></li>
            <li <?php if ($page_head == 'Create User'): ?><?php endif; ?>><a href="<?= $BASE.'/user/create' ?>"><i class="icon-plus-sign icon-black"></i> Create</a></li>
 
            <?php if ($page_head == 'Update User'): ?>
                <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>