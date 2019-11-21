<template>
  <div class='table-container'>
    <b-table class="product-listing" :items="productListing">
      <template slot="supplier_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
          <a-select-option value="1">
            <div class="d-inline-block"></div>PTA002
          </a-select-option>
        </a-select>
      </template>
      <template slot="category_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>Printers001
          </a-select-option>
          <a-select-option value="1">
            <div class="d-inline-block"></div>Ink002
          </a-select-option>
        </a-select>
      </template>
      <template slot="origin_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT Main
          </a-select-option>
          <a-select-option value="1">
            <div class="d-inline-block"></div>PTA Main
          </a-select-option>
        </a-select>
      </template>
      <template slot="status">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>Complete
          </a-select-option>
          <a-select-option value="1">
            <div class="d-inline-block"></div>Pending
          </a-select-option>
        </a-select>
      </template>
    </b-table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      productListing: [
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "P001",
          description: "Printer",
          unitCost: "R1000",
          status: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "T001",
          description: "Toner",
          unitCost: "R400",
          status: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "PX001",
          description: "Paper",
          unitCost: "R200",
          status: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "I001",
          description: "Ink",
          unitCost: "R150",
          status: ""
        }
      ]
    };
  }
};
</script>
 