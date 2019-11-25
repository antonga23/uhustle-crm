@extends('layouts.pdf') @section('content')
<table class="delivery-note">
  <thead>
    <tr>
      <th colspan="5">
        <img src="/images/Page-Automation-Logo-800x800.jpg">
      </th>

      <th colspan="7">
        <table width="100%" class="left">
          <tr>
            <td colspan="12" class="left">
              <h2>Supplier Invoice</h2>
            </td>
          </tr>

          <tr>
            <td colspan="12" class="left">
              <h3>[Company Name]</h3>
            </td>
          </tr>

          <tr>
            <td colspan="6" class="left">[Physical Address]</td>
            <td colspan="6" class="left">[Postal Address]</td>
          </tr>

          <tr>
            <td colspan="6" class="left">Reg No.: [reg no]</td>
            <td colspan="6" class="left">Fax No.: [fax no]</td>
          </tr>

          <tr>
            <td colspan="6" class="left">VAT No.: [vat no]</td>
            <td colspan="6" class="left">Tel No.: []tel no</td>
          </tr>

          <tr>
            <td colspan="12" class="left">Document Ref.: [doc ref]</td>
          </tr>
          
          <tr>
            <td colspan="12" class="left">Date.: [date]</td>
          </tr>

          <tr>
            <td colspan="12" class="left">Reference : [ref]</td>
          </tr>

          <tr>
            <td colspan="12" class="left">GRN No : [grn no]</td>
          </tr>
        </table>
      </th>
    </tr>
  </thead>

  <tbody class="top-border">
    <tr style="padding:0;">
      <td colspan="12"><b>Supplier Details:</b></td>
    </tr>

    <tr class="supplier-info">
      <td colspan="12" style="padding:0;">
        <table width="100%">
          <tr>
            <td colspan="6" style="padding:0;">
              <table width="100%">
                <tr>
                  <td><b>Supplier_Name:</b> [name]</td>
                </tr>

                <tr>
                  <td><b>Supplier_VAT No:</b> [VAT]</td>
                </tr>
                <tr>
                  <td><b>Supplier_Currency:</b> [ZAR]</td>
                </tr>
              </table>
            </td>
            <td colspan="6">
              <table width="100%">
                <tr>
                  <td rowspan="3">Postal Address: [Postal Address] </td>
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
              <th colspan="1">Item Code</th>
              <th colspan="3">Item Description</th>
              <th colspan="2">Serial No.</th>
              <th colspan="1">Quantity</th>
              <th colspan="1">Unit Price</th>
              <th colspan="2">Net Price</th>
              <th colspan="2">Total</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td colspan="1">[Item Code]</td>
              <td colspan="3">[Item Description]</td>
              <td colspan="2">[Serial No.]</td>
              <td colspan="1">[Quantity]</td>
              <td colspan="1">[Unit Price]</td>
              <td colspan="2">[Net Price]</td>
              <td colspan="2">[Total]</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="8" style="padding-left: 0;">
        <table width="100%" style="border-collapse: collapse;">
          <tr>
            <td class="left-border top-border" style="height: 47px; vertical-align: bottom;">__________________</td>
            <td class="top-border" style="height: 47px; vertical-align: bottom;">___________</td>
            <td class="right-border top-border" style="height: 47px; vertical-align: bottom;">________</td>
          </tr>
          <tr>
            <td class="center left-border bottom-border">Receiving Signature</td>
            <td class="center bottom-border">Date</td>
            <td class="center right-border bottom-border">Time</td>
          </tr>
        </table>
      </td>

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

    <tr style="border-top: 1px solid #000; margin-top:5px;">
      <td colspan="6">Requested By: [requested by]</td>
      <td colspan="6" class="right">Approved By: [approved by]</td>
    </tr>
  </tbody>
</table>
@endsection