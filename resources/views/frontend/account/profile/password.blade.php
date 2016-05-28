<div class="pmb-block">
    <div class="pmbb-header">
        <h2><i class="zmdi zmdi-key zmdi-hc-fw"></i> Password</h2>
        
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
        {!! Form::open(array('url' => URL::route('account.update.password'), 'id' => 'password-form', 'method' => 'post')) !!}
        <div class="pmbb-edit">
            <dl class="dl-horizontal">
                <dt class="p-t-10">Current Password</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::password('current-password', array('id' => 'current-password', 'class' => 'form-control', 'placeholder' => 'Current Password', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Password</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'New Password', 'required')) !!}
                    </div>
                </dd>
            </dl>
            
            <dl class="dl-horizontal">
                <dt class="p-t-10">Password Confirm</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::password('password-confirm', array('id' => 'password-confirm', 'class' => 'form-control', 'placeholder' => 'New Password Confirmation', 'required')) !!}
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