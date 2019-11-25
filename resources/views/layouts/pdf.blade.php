<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    @yield('content')
</body>
<style>
  @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
  @page {
    size: A4;
  }
       
  table {
    font-family: 'Rubik', sans-serif !important;
  }
  .delivery-note, .purchase-note, .supplier-invoice {
    margin: 0 auto;
    border-collapse: collapse;
  }
  .top-border {
    border-top: 1px solid black;
    margin-bottom: 10px;
  }
  .bottom-border {
    border-bottom: 1px solid black;
  }
  .right-border {
    border-right: 1px solid black;
  }
  .left-border {
    border-left: 1px solid black;
  }
  table tr td {
    font-size: 14px;
    padding: 5px;
  }
  table thead th img {
    width: 200px;

  }
  h2, h3 {
    margin-bottom: 0 !important;
  }
  .divider {
    border-top: 1px solid #f4f4f5;
  }
  .supplier-info, .company-info {
    border: 1px solid #ccc;;
  }
  .left {
    text-align: left;
  }
  .center {
    text-align: center;
  }
  .right {
    text-align: right;
  }
  .bold {
    font-weight: 700;
  }
</style>
</html>