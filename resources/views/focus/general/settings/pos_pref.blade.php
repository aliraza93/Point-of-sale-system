@extends ('core.layouts.app')
@section ('title', trans('pos.preference'))
@section('content')
    <div class="">
        <div class="content-wrapper">

            <div class="content-body "> {{ Form::open(['route' => 'biller.settings.pos_preference', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post','files' => true, 'id' => 'create-hrm']) }}

                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom-blue-grey">
                                <h4 class="card-title">{{ trans('pos.preference') }}</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class='row mb-1'>
                                        {{ Form::label( 'printer', trans('pos.preference'),['class' => 'col-12 control-label']) }}
                                        <div class='col-6'>
                                            <select name="printer"
                                                    class="round form-control" id="printer">
                                                {!! $defaults['feature_value']  == 0 ? "<option value='0' selected>--".trans('pos.printer_browser')."--</option>" : "<option value='1' selected>--".trans('pos.printer_network')."--</option>" !!}
                                                <option value="0">{{trans('pos.printer_browser')}}</option>
                                                <option value="1">{{trans('pos.printer_network')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="network" @if(!$defaults['feature_value']) style="display:none" @endif>
                                        <div class='row mb-1'>
                                            {{ Form::label( 'address', trans('pos.network_address'),['class' => 'col-12 control-label']) }}
                                            <div class='col-6'>
                                                <small>Example: 10.10.x.x</small>
                                                <input class="form-control round" name="network_address" type="text"
                                                       value="{{$conf['address']}}">
                                            </div>
                                        </div>
                                        <div class='row mb-1'>
                                            {{ Form::label( 'port', trans('pos.network_port'),['class' => 'col-12 control-label']) }}
                                            <div class='col-6'>
                                                <small>Example: 9100</small>
                                                <input class="form-control round" name="network_port" type="number"
                                                       value="{{$conf['port']}}">
                                            </div>
                                        </div>
                                        <div class='row mb-1'>
                                            {{ Form::label( 'port', trans('pos.print_mode'),['class' => 'col-12 control-label']) }}
                                            <div class='col-6'>

                                                <select class="form-control round" name="print_mode">
                                                    {!! $conf['mode']  == 1 ? "<option value='1' selected>--".trans('pos.image_mode')."--</option>" : "<option value='0' selected>--".trans('pos.text_mode')."--</option>" !!}

                                                    <option value="0">{{trans('pos.text_mode')}}</option>
                                                    <option value="1">{{trans('pos.image_mode')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=''>
                                {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'm-1 btn btn-info btn-md']) }}
                            </div>
                        </div>


                        <!--edit-form-btn-->

                    </div>


                </div>


                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    <script>
        $(function () {
            $("#printer").on("change", function (e) {
                if ($(this).val() == 0) {
                    $(".network").hide();
                } else {
                    $(".network").show();
                }
            });
        });
    </script>
@endsection