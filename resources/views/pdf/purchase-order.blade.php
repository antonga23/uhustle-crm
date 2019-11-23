@extends('layouts.pdf')

@section('content')
<table width="100">
  <thead>
    <tr>
      <th colspan="5">logo</th>

      <th>
        <table width="100">
          <tr>
            <td colspan="12"><h1>Purchase Order</h1></td>
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

          <tr>
            <td colspan="12">Document Ref.: [ref no]</td>
          </tr>

          <tr>
            <td colspan="12">Date : [date]</td>
          </tr>

          <tr>
            <td colspan="12">Description : [desc]</td>
          </tr>
        </table>
      </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td colspan="12">Your Details : [details]</td>
    </tr>

    <tr>
      <td colspan="12"><span>Company Name : [company name]</span></td>
    </tr>

    <tr>
      <td colspan="12"><span>Company Code : [company code]</span></td>
    </tr>

    <tr>
      <td>
        <table width="100">
          <thead>
            <tr>
              <th>ID</th>
              <th>Item Code</th>
              <th>Supplier Code</th>
              <th>Item Description</th>
              <th>Currency</th>
              <th>Unity Cost</th>
              <th>Qty/UOP</th>
              <th>Qty</th>
              <th>Cost</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>[ID]</td>
              <td>[Item Code]</td>
              <td>[Supplier Code]</td>
              <td>[Item Description]</td>
              <td>[Currency]</td>
              <td>[Unit Cost]</td>
              <td>[Qty/UOP]</td>
              <td>[Qty]</td>
              <td>[Cost]</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="8" rowspan="3">
        <table width="100">
          <tr>
            <td>Receiving Signature</td>
            <td>Date</td>
            <td>Time</td>
          </tr>
        </table>
      </td>

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
      <td colspan="6">Requested By: [requested by]</td>
      <td colspan="6">Approved By: [approved by]</td>
    </tr>
  </tbody>
</table>
@endsection