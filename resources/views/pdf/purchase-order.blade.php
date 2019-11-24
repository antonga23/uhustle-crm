@extends('layouts.pdf') @section('content')
<table class="purchase-note">
    <thead>
        <tr>
            <th colspan="5">
                <img src="{{ public_path() . '/images/Page-Automation-Logo-800x800.jpg' }}">
            </th>
            <th colspan="7">
                <table width="100%" class="right">
                    <tr>
                        <td colspan="12">
                            <h2>Purchase Order</h2></td>
                    </tr>

                    <tr>
                        <td colspan="12">
                            <h3>{{ $requesting_company->name }}</h3></td>
                    </tr>

                    <tr>
                        <td colspan="6">{{ $requesting_company->address }}</td>
                        <td colspan="6">{{ $requesting_company->postal_address }}</td>
                    </tr>

                    <tr>
                        <td colspan="6">Reg No.: {{ $requesting_company->reg_number }}</td>
                        <td colspan="6">Fax No.: {{ $requesting_company->fax }}</td>
                    </tr>

                    <tr>
                        <td colspan="6">VAT No.: {{ $requesting_company->tax_number }}</td>
                        <td colspan="6">Tel No.: {{ $requesting_company->tell }}</td>
                    </tr>

                    <tr>
                        <td colspan="12">Document Ref.: {{ $doc_ref }}</td>
                    </tr>

                    <tr>
                        <td colspan="12">Date.: {{ $order->created_at }}</td>
                    </tr>

                    <tr>
                        <td colspan="12">Description : {{ $order->delivery_note }}</td>
                    </tr>
                </table>
            </th>
        </tr>
    </thead>

    <tbody class="top-border">
        <tr style="padding:0;">
            <td colspan="12"><b>Your Details:</b></td>
        </tr>

        <tr class="company-info">
            <td colspan="12" style="padding:0;">
                <table width="100%">
                    <tr>
                        <td colspan="12" style="padding:0;">
                            <table width="100%">
                                <tr>
                                    <td><b>Company Name:</b> {{ $requesting_company->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Company Code:</b> {{ $requesting_company->code }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="12" style="padding:10px 0px 0px 0px;">
                <table width="100%">
                    <thead style="background-color: #cdcdcf;">
                        <tr>
                            <th colspan="1">ID</th>
                            <th colspan="1">Supplier Code</th>
                            <th colspan="3">Item Description</th>
                            <th colspan="1">Priority</th>
                            <th colspan="1">Unit Cost</th>
                            <th colspan="1">Qty</th>
                            <th colspan="1">Vat</th>
                            <th colspan="2">Cost</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($items as $key => $value)
                        <tr>
                            <td colspan="1">{{ $value->id }}</td>
                            <td colspan="1">{{ $value->PartCode }}</td>
                            <td colspan="3">{{ $value->Description }}</td>
                            <td colspan="1">{{ $value->Priority }}</td>
                            <td colspan="1">{{ $value->UnitCost }}</td>
                            <td colspan="1">{{ $value->Quantity }}</td>
                            <td colspan="1">{{ $value->Vat }}</td>
                            <td colspan="2">{{ $value->Total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="4" style="padding:0;">
                &nbsp;
            </td>
            <td colspan="8">
                <table width="100%" class="right">
                    <tr>
                        <td colspan="4"><strong>Sub Total</strong></td>
                        <td colspan="4">ZAR {{ $order->sub_amount }}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><strong>VAT</strong></td>
                        <td colspan="4">ZAR {{ $order->vat }}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><strong>Total</strong></td>
                        <td colspan="4">ZAR {{ $order->amount }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>Receiving Signature</td>
            <td>Date</td>
            <td>Time</td>
        </tr>
        <tr>
            <td colspan="6" >Requested By: {{ $order->requestor }}</td>
            <td colspan="6" class="right">Approved By: ____________________________</td>
        </tr>
    </tbody>
</table>
@endsection