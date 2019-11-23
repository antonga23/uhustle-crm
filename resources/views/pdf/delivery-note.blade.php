@extends('layouts.pdf')

@section('content')
<table width="100">
  <thead>
    <tr>
      <th colspan="5">logo</th>

      <th>
        <table width="100">
          <tr>
            <td colspan="12"><h1>Supplier Invoice</h1></td>
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
            <td colspan="6">Tel No.: []tel no</td>
          </tr>

          <tr>
            <td colspan="12">Document Ref.: [doc ref]</td>
          </tr>

          <tr>
            <td colspan="12">Reference : [ref]</td>
          </tr>

          <tr>
            <td colspan="12">GRN No : [grn no]</td>
          </tr>
        </table>
      </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td colspan="12">Supplier Details : [supplier details]</td>
    </tr>

    <tr>
      <td colspan="12">
        <table>
          <tr>
            <td colspan="6">Name: [name]</td>
            <td rowspan="3">Postal Address: </td>
            <td rowspan="3">[Postal Address]</td>
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
              <th>Serial No.</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Net Price</th>
              <th>Total</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>[Item Code]</td>
              <td>[Item Description]</td>
              <td>[Serial No.]</td>
              <td>[Quantity]</td>
              <td>[Unit Price]</td>
              <td>[Net Price]</td>
              <td>[Total]</td>
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