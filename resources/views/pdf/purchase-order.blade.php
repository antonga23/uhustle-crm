@extends('layouts.pdf') @section('content')
<table class="purchase-note container">
    <tr valign="top">
        <td colspan="12">
            <table width="100%">
                <tr>
                    <th colspan="5">
                        <img src="{{ public_path() . '/images/Page-Automation-Logo-800x800.jpg' }}">
                    </th>

                    <th colspan="7">
                        <table width="100%" class="left">
                            <tr>
                                <td colspan="12" class="left">
                                    <h2>Purchase Order</h2>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="12" class="left">
                                    <h3>{{ $requesting_company->name }}</h3>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6" class="left">{{ $requesting_company->address }}</td>
                                <td colspan="6" class="left">{{ $requesting_company->postal_address }}</td>
                            </tr>

                            <tr>
                                <td colspan="6" class="left">Reg No.: {{ $requesting_company->reg_number }}</td>
                                <td colspan="6" class="left">Fax No.: {{ $requesting_company->fax }}</td>
                            </tr>

                            <tr>
                                <td colspan="6" class="left">VAT No.: {{ $requesting_company->tax_number }}</td>
                                <td colspan="6" class="left">Tel No.: {{ $requesting_company->tell }}</td>
                            </tr>

                            <tr>
                                <td colspan="12" class="left">Document Ref.: {{ $doc_ref }}</td>
                            </tr>

                            <tr>
                                <td colspan="12" class="left">Date.: {{ $order->created_at }}</td>
                            </tr>

                            <tr>
                                <td colspan="12" class="left">Description : {{ $order->delivery_note }}</td>
                            </tr>

                        </table>
                    </th>
                </tr>

                <tr style="padding:0;">
                    <td colspan="12" class="top-border"><b>Your Details:</b></td>
                </tr>

                <tr class="company-info">
                    <td colspan="12" style="padding:0; border:1px solid #000;">
                        <table width="100%">
                            <tr>
                                <td colspan="12" style="padding:0;">
                                    <table width="100%">
                                        <tr>
                                            <td><b>Company Name:</b> {{ $requesting_company->name }}</td>
                                        </tr>

                                        <tr>
                                            <td><b>Company Code:</b>{{ $requesting_company->code }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr style="border-bottom: 1px solid #000; margin-bottom:5px;">
                    <td colspan="12" style="padding:10px 0px 0px 0px;">
                        <table width="100%" style="border-collapse: collapse;">
                            <thead style="background-color: #cdcdcf;">
                                <tr>
                                    <th colspan="1">ID</th>
                                    <th colspan="2">Supplier Code</th>
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
                                    <td colspan="2">{{ $value->PartCode }}</td>
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
                    <td>
                        <p> &nbsp; </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr valign="bottom">
        <td colspan="12">
            <table width="100%">
                <tr>
                    <td colspan="12" class="top-border">
                        <table width="100%">
                            <tr>
                                <td colspan="6" style="padding-left: 0;">
                                    <table width="100%" style="border-collapse: collapse;">
                                        <tr>
                                            <td class="center left-border top-border" style="height:67px; vertical-align: bottom;">_____________</td>
                                            <td class="center top-border" style="height: 67px; vertical-align: bottom;">___________</td>
                                            <td class="center right-border top-border" style="height: 67px; vertical-align: bottom;">________</td>
                                        </tr>
                                        <tr>
                                            <td class="center left-border bottom-border">Receiving Signature</td>
                                            <td class="center bottom-border">Date</td>
                                            <td class="center right-border bottom-border">Time</td>
                                        </tr>
                                    </table>
                                </td>

                                <td colspan="6" style="padding-right: 0;">
                                    <table width="100%" class="right" style="border-collapse: collapse">
                                        <tr>
                                            <td colspan="3" style="border: 1px solid #000;"><strong>Sub Total</strong></td>
                                            <td colspan="3" style="border: 1px solid #000;">{{ $recieving_company->currency }} {{ $order->sub_amount }}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="border: 1px solid #000;"><strong>VAT</strong></td>
                                            <td colspan="3" style="border: 1px solid #000;">{{ $recieving_company->currency }} {{ $order->vat }}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="border: 1px solid #000;"><strong>Total</strong></td>
                                            <td colspan="3" style="border: 1px solid #000;">{{ $recieving_company->currency }} {{ $order->amount }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td colspan="12" class="top-border">
                        <table width="100%">
                            <tr>
                                <td colspan="6">Requested By: {{ $order->requestor }}</td>
                                <td colspan="6" class="right">Approved By: ___________</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@endsection