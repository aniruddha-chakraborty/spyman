@extends('master_view')

@section('container')
        <!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-haze">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Completed complain information
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body table-responsive">
                <table class="table table-striped table-hover" id="sample_5">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Complainer</th>
                        <th title="Complainer Mobile Number">Mobile</th>
                        <th>Institute</th>
                        <th title="Complainer Address">Address</th>
                        <th>Token</th>
                        <th>VAT reg.</th>
                        <th>Complain</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($complains as $key => $complain)
                        <tr>
                            <td>{!! $complain->complain_type !!}</td>
                            <td>{!! $complain->complainer_name !!}</td>
                            <td>{!! $complain->complainer_mobile !!}</td>
                            <td>{!! $complain->institute_name !!}</td>
                            <td>{!! $complain->address !!}</td>
                            <td>{!! $complain->token_id !!}</td>
                            <td>{!! $complain->vat_reg_id !!}</td>
                            <td>{!! $complain->complain !!}</td>
                            <td>{!! $complain->status !!}</td>
                            <td>
                                {!! link_to_route('dashboard.medicine.group.edit', 'Change status', $group->id, ['class' => 'btn btn-success']) !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $complains->render() !!}
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->
@endsection