<div class="pm-overview c-overflow">
    <div class="pmo-pic">
        <div class="p-relative">
            <a href="">
                <img class="img-responsive" src="{{ asset('assets/frontend/img/temp/profile-pic-2.jpg') }}" alt=""> 
            </a>
            
            <div class="dropdown pmop-message">
                <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                    <i class="zmdi zmdi-comment-text-alt"></i>
                </a>
                
                <div class="dropdown-menu">
                    <textarea placeholder="Write something..."></textarea>
                    
                    <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                </div>
            </div>
            
            <a href="" class="pmop-edit">
                <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
            </a>
        </div>
        
        
        <div class="pmo-stat">
            <h2 class="m-0 c-white">1562</h2>
            Total Connections
        </div>
    </div>
    
    <div class="pmo-block pmo-contact hidden-xs">
        <h2>Contact</h2>
        
        <ul>
            <li><i class="zmdi zmdi-phone"></i> {{ $currentCustomer->phone }}</li>
            <li><i class="zmdi zmdi-email"></i> {{ $currentCustomer->email }}</li>
            <li><i class="zmdi zmdi-facebook-box"></i> {{ $currentCustomer->facebook_name }}</li>
            <li><i class="zmdi zmdi-twitter"></i> {{ $currentCustomer->twitter_name }}</li>
            <li>
                <i class="zmdi zmdi-pin"></i>
                <address class="m-b-0 ng-binding">
                    {{ the_content($currentCustomer->address) }}
                </address>
            </li>
        </ul>
    </div>
</div>