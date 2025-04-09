@extends('layouts.pdf')

@section('content')
<table width="100" class="supplier-invoice">
  <thead>
    <tr>
      <th colspan="5">
        <img src="/images/Page-Automation-Logo-800x800.jpg">
      </th>

      <th colspan="7">
        <table width="100%" class="left">
          <tr>
            <td colspan="12">
              <h2>Tax Invoice<h2>
            </td>
          </tr>

          <tr>
            <td colspan="12"><h3>[Company Name]</h3></td>
          </tr>

          <tr>
            <td colspan="6">[Physical Address]</td>
            <td colspan="6">[Postal Address]</td>
          </tr>

          <tr>
            <td colspan="6">Reg No.: [reg no]</td>
            <td colspan="6">Fax No.: [fax no]</td>
          </tr>

          <tr>
            <td colspan="6">VAT No.: [vat no]</td>
            <td colspan="6">Tel No.: [tel no]</td>
          </tr>
        </table>
      </th>
    </tr>
  </thead>

  <tbody class="top-border">
    <tr style="padding:0;">
      <td colspan="6">
        <table  width="100%">
          <tr>
            <td style="vertical-align: top;">[barcode]</td>
          </tr>

          <tr rowspan="5">
            <td style="vertical-align: bottom;">Sales Person: [sales person]</td>
          </tr>
        </table>
      </td>

      <td td colspan="6">
        <table  width="100%">
          <tr>
            <td class="bold">Document Ref:</td>
            <td>[Document Ref]</td>
          </tr>

          <tr>
            <td class="bold">Date:</td>
            <td>[Date]</td>
          </tr>

          <tr>
            <td class="bold">Account Manager:</td>
            <td>[Account Manager]</td>
          </tr>

          <tr>
            <td class="bold">Your Ref:</td>
            <td>[Your Ref]</td>
          </tr>

          <tr>
            <td class="bold">Call Ref:</td>
            <td>[Call Ref]</td>
          </tr>

          <tr>
            <td class="bold">Machine No:</td>
            <td>[Machine No]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="top-border">
      <td colspan="6">
        <table  width="100%">
          <tr>
            <td colspan="4" class="bold">Attention: </td>
            <td>[Attention]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Cust. Code:</td>
            <td>[Cust. Code]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Customer:</td>
            <td>[Customer]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Billing Address:</td>
            <td>[Billing Address]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Tel No:</td>
            <td>[Tel No]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Fax No:</td>
            <td>[Fax No]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">VAT No:</td>
            <td>[VAT No]</td>
          </tr>
        </table>
      </td>
    
      <td>
        <table width="100%">
          <tr>
            <td colspan="4" class="bold">Ship Contact:</td>
            <td>[Ship Contact]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Shipping Address:</td>
            <td>[Shipping Address]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Tel No:</td>
            <td>[Tel No]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Fax No:</td>
            <td>[Fax No]</td>
          </tr>

          <tr>
            <td colspan="4" class="bold">Email:</td>
            <td>[Email]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="12" style="padding:10px 0px 0px 0px;">
        <table width="100%" style="border-collapse: collapse;">
          <thead>
            <tr style="background-color: #cdcdcf;">
              <th>Item Code</th>
              <th>Item Description</th>
              <th>Quantity</th>
              <th>Discount %</th>
              <th>Unit Price</th>
              <th>Net Price</th>
              <th>Total</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>[Item Code]</td>
              <td>[Item Description]</td>
              <td>[Quantity]</td>
              <td>[Discount %]</td>
              <td>[Unit Price]</td>
              <td>[Net Price]</td>
              <td>[Total]</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="8" style="border: 1px solid #000; vertical-align: bottom;">Settlement terms are strictly 30 Days</td>

      <td colspan="4" style="padding-right: 0;">
        <table width="100%" class="right" style="border-collapse: collapse">
          <tr>
            <td colspan="4" style="border: 1px solid #000;"><strong>Sub Total</strong></td>
            <td colspan="4" style="border: 1px solid #000;">ZAR [amount]</td>
          </tr>

          <tr>
            <td colspan="4" style="border: 1px solid #000;"><strong>VAT</strong></td>
            <td colspan="4" style="border: 1px solid #000;">ZAR [amount]</td>
          </tr>

          <tr>
            <td colspan="4" style="border: 1px solid #000;"><strong>Total</strong></td>
            <td colspan="4" style="border: 1px solid #000;">ZAR [amount]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="12" style="padding-right: 0; padding-left: 0;" >
        <table width="100%" style="border-collapse: collapse;">
          <tr>
            <td class="top-border bottom-border">
              <p>__________________</p>
              <p class="center">Receiving Signature</p>
            </td>

            <td class="top-border bottom-border">
              <p>__________________</p>
              <p class="center">Print Name</p>
            </td>

            <td class="top-border bottom-border">
              <p>___________</p>
              <p class="center">Date</p>
            </td>

            <td class="top-border bottom-border">
              <p>________</p>
              <p class="center">Time<p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr style="border-bottom: 1px solid #000;">
      <td colspan="6">Requested By: </td>
      <td colspan="6" class="right">Approved By: </td>
    </tr>
  </tbody>
</table>
@endsection