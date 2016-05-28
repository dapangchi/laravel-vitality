<div class="pmb-block">
    <div class="pmbb-header">
        <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>
        
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
            {{ the_content($currentCustomer->summary) }}
        </div>
        
        {!! Form::open(array('url' => URL::route('account.update.summary'), 'id' => 'summary-form', 'method' => 'post')) !!}
        <div class="pmbb-edit">
            <div class="fg-line">
                {!! Form::textarea('summary', $currentCustomer->summary, array('id' => 'summary', 'class' => 'form-control', 'placeholder' => 'Summary...', 'rows' => 5)) !!}
            </div>
            <div class="m-t-10">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>