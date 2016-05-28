<div class="pmb-block">
    <div class="pmbb-header">
        <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>
        
        <ul class="actions">
            <li class="dropdown">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a data-pmb-action="edit" href="">Edit</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="pmbb-body p-l-30">
        <div class="pmbb-view">
            <dl class="dl-horizontal">
                <dt>Mobile Phone</dt>
                <dd>{{ $currentCustomer->phone }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Email Address</dt>
                <dd>{{ $currentCustomer->email }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Facebook</dt>
                <dd>{{ $currentCustomer->facebook_name }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Twitter</dt>
                <dd>{{ $currentCustomer->twitter_name }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Address</dt>
                <dd>{{ the_content($currentCustomer->address) }}</dd>
            </dl>
        </div>
        
        {!! Form::open(array('url' => URL::route('account.update.contact'), 'id' => 'contact-form', 'method' => 'post')) !!}
        <div class="pmbb-edit">
            <dl class="dl-horizontal">
                <dt class="p-t-10">Mobile Phone</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::text('phone', $currentCustomer->phone, array('id' => 'phone', 'class' => 'form-control', 'placeholder' => 'eg. 00971 12345678 9', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Email Address</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::email('email', $currentCustomer->email, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'eg. malinda.h@gmail.com', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Facebook</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::text('facebook-name', $currentCustomer->facebook_name, array('id' => 'facebook-name', 'class' => 'form-control', 'placeholder' => 'eg. malinda', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Twitter</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::text('twitter-name', $currentCustomer->twitter_name, array('id' => 'twitter-name', 'class' => 'form-control', 'placeholder' => 'eg. @malinda', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Address</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::textarea('address', $currentCustomer->address, array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'eg. Street1 Road', 'required', 'rows' => 5)) !!}
                    </div>
                </dd>
            </dl>
            
            <div class="m-t-30">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>