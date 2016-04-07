@extends('master_view')

@section('container')
        <!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-haze">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Status edit
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
                <table class="table table-striped table-hover">
                    <tr>
                        <td>Type</td>
                        <td>: {!! $complain->complain_type !!}</td>
                    </tr>
                    <tr>
                        <td>Complainer</td>
                        <td>: {!! $complain->complainer_name !!}</td>
                    </tr>
                    <tr>
                        <td>Complainer Mobile Number</td>
                        <td>: {!! $complain->complainer_mobile !!}</td>
                    </tr>
                    <tr>
                        <td>Institute</td>
                        <td>: {!! $complain->institute_name !!}</td>
                    </tr>
                    <tr>
                        <td>Complainer Address</td>
                        <td>{!! $complain->address !!}</td>
                    </tr>
                    <tr>
                        <td>Token</td>
                        <td>: {!! $complain->token_id !!}</td>
                    </tr>
                    <tr>
                        <td>VAT reg.</td>
                        <td>: {!! $complain->vat_reg_id !!}</td>
                    </tr>
                    <tr>
                        <td>Complain</td>
                        <td>: {!! $complain->complain !!}</td>
                    </tr>
                    <form>
                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="status" class="form-control">
                                    <option value="processing">Processing</option>
                                    <option value="incomplete">Incomplete</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-primary">Change</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->
@endsection