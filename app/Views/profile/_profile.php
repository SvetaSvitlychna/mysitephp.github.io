

<div class="col-3 profile-sidebar position-fixed">
    <div class="overlay-form ">
        <div class="row-profile">     
            <div class="col-mb-4 mb-4 float-left">
                    <div class="profile-userpic">
                        <a href="/profile" class="pull-right">
                        <img title="profile image" class="img-circle img-responsive"
                                src="/assets/images/user.png"></a>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-first_name">
                            <?= $user->first_name;?>
                            <?= $user->last_name;?>
                        </div>
                        <div class="profile-usertitle-job">
                        
                            <?=$user->role_id;?>
                            
                        </div>
                    </div>
                    <div class="profile-usermenu sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="active nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-home"></i>
                                    Overview </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="fa fa-user"></i>
                                    Account Settings </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-check"></i>
                                    Tasks </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile/orders">
                                    <i class="fa fa-flag"></i>
                                    Orders </a>
                            </li>
                        </ul>
                    </div>

            </div>
        </div>
    </div>    
</div>