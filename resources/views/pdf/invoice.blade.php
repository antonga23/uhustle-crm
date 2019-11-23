@extends('layouts.pdf')

@section('content')
<table width="100">
  <thead>
    <tr>
      <th colspan="5">[logo]</th>

      <th>
        <table width="100">
          <tr>
            <td colspan="12"><h1>Tax Invoice</h1></td>
          </tr>

          <tr>
            <td colspan="12">[Company Name]</td>
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

  <tbody>
    <tr>
      <td colspan="6">
        <table>
          <tr rowspan="5">
            <td>[barcode]</td>
          </tr>

          <tr>
            <td>Sales Person: [sales person]</td>
          </tr>
        </table>
      </td>

      <td>
        <table>
          <tr>
            <td>Document Ref:</td>
            <td>[Document Ref]</td>
          </tr>

          <tr>
            <td>Date:</td>
            <td>[Date]</td>
          </tr>

          <tr>
            <td>Account Manager:</td>
            <td>[Account Manager]</td>
          </tr>

          <tr>
            <td>Your Ref:</td>
            <td>[Your Ref]</td>
          </tr>

          <tr>
            <td>Call Ref:</td>
            <td>[Call Ref]</td>
          </tr>

          <tr>
            <td>Machine No:</td>
            <td>[Machine No]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="6">
        <table>
          <tr>
            <td colspan="4">Attention: </td>
            <td>[Attention]</td>
          </tr>

          <tr>
            <td colspan="4">Cust. Code:</td>
            <td>[Cust. Code]</td>
          </tr>

          <tr>
            <td colspan="4">Customer:</td>
            <td>[Customer]</td>
          </tr>

          <tr>
            <td colspan="4">Billing Address:</td>
            <td>[Billing Address]</td>
          </tr>

          <tr>
            <td colspan="4">Tel No:</td>
            <td>[Tel No]</td>
          </tr>

          <tr>
            <td colspan="4">Fax No:</td>
            <td>[Fax No]</td>
          </tr>

          <tr>
            <td colspan="4">VAT No:</td>
            <td>[VAT No]</td>
          </tr>
        </table>
      </td>
    
      <td>
        <table width="100">
          <tr>
            <td colspan="4">Ship Contact:</td>
            <td>[Ship Contact]</td>
          </tr>

          <tr>
            <td colspan="4">Shipping Address:</td>
            <td>[Shipping Address]</td>
          </tr>

          <tr>
            <td colspan="4">Tel No:</td>
            <td>[Tel No]</td>
          </tr>

          <tr>
            <td colspan="4">Fax No:</td>
            <td>[Fax No]</td>
          </tr>

          <tr>
            <td colspan="4">Email:</td>
            <td>[Email]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <table width="100">
          <thead>
            <tr>
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
      <td colspan="8" rowspan="3">Settlement terms are strictly 30 Days</td>

      <td>
        <table width="100">
          <tr>
            <td colspan="4"><strong>Sub Total</strong></td>
            <td colspan="4">ZAR [amount]</td>
          </tr>

          <tr>
            <td colspan="4"><strong>VAT</strong></td>
            <td colspan="4">ZAR [amount]</td>
          </tr>

          <tr>
            <td colspan="4"><strong>Total</strong></td>
            <td colspan="4">ZAR [amount]</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <table width="100">
          <tr>
            <td>Receiving Signature</td>
            <td>Print Name</td>
            <td>Date</td>
            <td>Time</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="6">Requested By: </td>
      <td colspan="6">Approved By: </td>
    </tr>
  </tbody>
</table>
@endsection