@extends ('core.layouts.public_app')
@section('content')
    <?php
    $rming = $invoice['total'] - $invoice['pamnt'];
    if ($invoice['status'] == 'due') {
        $rming = $invoice['total'];
    }
    $surcharge_t = false;

    $row = $gateway->config;

    $title = $gateway['name'];
    if ($row['surcharge'] > 0) {
        $surcharge_t = true;
        $fee = '( ' . amountFormat($rming, $invoice['currency']) . '+' . amountFormat($row['surcharge']) . ' %)';
    } else {
        $fee = '';


    }
    ?>
    <section class="card">
        <div class="card-header">
            <h4 class="card-title  text-center">{{trans('payments.secure_checkout')}}
                ({{$general['bill_type']}} #{{$invoice['tid']}})</h4>
        </div>
        <div class="card-body center">
            {{ Form::open(['route' => 'biller.paypal_process', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-usergatewayentry']) }}
            <?php
            $attributes = array('class' => 'row justify-content-md-center', 'id' => 'login_form');
            // echo form_open('billing/gateway_process', $attributes);
            ?>

            <?php echo '<input type="hidden" class="form-control" name="id" value="' . $invoice['id'] . '"/><input type="hidden" class="form-control" name="type" value="1"/>
                <input type="hidden" class="form-control" name="token" value="' . $token . '"/>'; ?>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group text-center">
                        <h5><?php


                            $rming = $invoice['total'] - $invoice['pamnt'];

                            $surcharge_t = false;
                            $row = $gateway;
                            $cid = $row['id'];
                            $title = $row['name'];
                            $fee = '';

                            echo $title . ' ' . $fee ?></h5><img class="bg-white round mt-1"
                                                                 style="max-width:30rem;max-height:6rem"
                                                                 src="{{ Storage::disk('public')->url('app/public/img/gateway_logo/' . $row->config['user_gateway_id'].'.png') }}">
                        <input type="hidden" class="form-control" name="gateway" value="<?= $cid ?>">
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">{{$general['bill_type']}}
                            #{{$invoice['tid']}} {{trans('general.total')}}</label>
                        <input name="total_amount"
                               value="<?php echo amountFormat($invoice['total'], $invoice['currency']) ?>"
                               type="text"
                               class="form-control"


                               readonly/> <input name="amount"
                                                 value="<?php echo numberClean($invoice['total']) ?>"
                                                 type="hidden"
                                                 class="form-control"


                                                 readonly/>


                    </div>
                    <div class="form-group">
                        <label for="cardNumber">{{trans('general.balance_due')}}   </label>
                        <input name="total_amount"
                               value="<?php
                               echo amountFormat($rming, $invoice['currency']); ?>"
                               type="text"
                               class="form-control"
                               readonly/>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success btn-lg btn-block"
                                    type="submit">{{trans('payments.pay_now')}}</button>
                        </div>
                    </div>
                    @if($row->config['surcharge'])
                        <div class="form-group info alert">
                            {{$row->config['surcharge']}}% {{trans('usergatewayentries.surcharge_applicable')}}
                        </div>
                    @endif
                    <div class="row" style="display:none;">
                        <div class="col">
                            <p class="payment-errors"></p>
                        </div>
                    </div>

                </div>
            </div>
            {{Form::close()}}
        </div>
    </section>
@endsection