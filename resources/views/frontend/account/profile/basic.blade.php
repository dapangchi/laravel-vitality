<div class="pmb-block">
    <div class="pmbb-header">
        <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>
        
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
                <dt>Full Name</dt>
                <dd>{{ $currentCustomer->fullName() }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Gender</dt>
                <dd>{{ $currentCustomer->genderName() }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Birthday</dt>
                <dd>{{ $currentCustomer->birthday }}</dd>
            </dl> 
        </div>
        
        {!! Form::open(array('url' => URL::route('account.update.basic'), 'id' => 'basic-form', 'method' => 'post')) !!}
        <div class="pmbb-edit">
            <dl class="dl-horizontal">
                <dt class="p-t-10">First Name</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::text('first-name', $currentCustomer->first_name, array('id' => 'first-name', 'class' => 'form-control', 'placeholder' => 'First Name', 'required')) !!}
                    </div>
                    
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Last Name</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::text('last-name', $currentCustomer->last_name, array('id' => 'last-name', 'class' => 'form-control', 'placeholder' => 'Last Name', 'required')) !!}
                    </div>
                    
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Gender</dt>
                <dd>
                    <div class="fg-line">
                        {!! Form::select('gender', array(GENDER_MALE => 'Male', GENDER_FEMALE => 'Female'), $currentCustomer->gender, array('id' => 'gender', 'class' => 'form-control', 'required')) !!}
                    </div>
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt class="p-t-10">Birthday</dt>
                <dd>
                    <div class="dtp-container dropdown fg-line">
                        {!! Form::text('birthday', date('d/m/Y', strtotime($currentCustomer->birthday)), array('id' => 'birthday', 'class' => 'form-control date-picker', 'data-toggle' => 'dropdown', 'required')) !!}
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