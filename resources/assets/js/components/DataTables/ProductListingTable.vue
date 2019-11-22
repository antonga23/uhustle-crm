<template>
  <div class="table-container">
    <b-table class="product-listing" :items="productListing">
      <template slot="supplier_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>
      <template slot="category_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>Printers001
          </a-select-option>
        </a-select>
      </template>
      <template slot="origin_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT Main
          </a-select-option>
        </a-select>
      </template>
      <template slot="status">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>Complete
          </a-select-option>
        </a-select>
      </template>
      <template slot="actions">
        <span class="actions">
          <a class="Edit" href="#" title="Edit"></a>
          <a class="Delete" href="#" title="Delete"></a>
          <a class="Order-button" href="#" title="Order">Order</a>
        </span>
      </template>
    </b-table>
    <b-pagination
      :current-page="currentPage"
      :per-page="20"
      aria-controls="my-table"
      align="center"
      size="sm"
    ></b-pagination>
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
          status: "",
          actions: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "T001",
          description: "Toner",
          unitCost: "R400",
          status: "",
          actions: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "PX001",
          description: "Paper",
          unitCost: "R200",
          status: "",
          actions: ""
        },
        {
          supplier_id: "",
          category_id: "",
          origin_id: "",
          code: "I001",
          description: "Ink",
          unitCost: "R150",
          status: "",
          actions: ""
        }
      ]
    };
  }
};
</script>
 