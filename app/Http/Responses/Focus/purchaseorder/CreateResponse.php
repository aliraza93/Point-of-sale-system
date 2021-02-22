<?php

namespace App\Http\Responses\Focus\purchaseorder;
use App\Models\market\ChannelBill;
use App\Models\market\SalesChannel;
use App\Models\purchaseorder\Purchaseorder;
use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable
{
    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {

         $last_invoice=Purchaseorder::orderBy('id', 'desc')->where('i_class','=',0)->first();
         $salesChannels=SalesChannel::all();
         $current_salesChannel=ChannelBill::where('bill_id','=',$this->invoices->id)->where('ref','=',2)->first();
        return view('focus.purchaseorders.create')->with(array('last_invoice'=>$last_invoice,'salesChannels'=>$salesChannels,'current_salesChannel'=>$current_salesChannel))->with(bill_helper(3,9));
    }
}