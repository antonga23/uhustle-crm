<template>
  <div class="table-container">
    <b-table class="product-listing" :items="productListing" :per-page="perPage"   
                    :current-page="currentPage">
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
    class="products-pagination"
       v-model="currentPage"
      :per-page="perPage"
      align="center"
      size="sm"
      :total-rows="rows"
    ></b-pagination>
  </div>
</template>
<script>
export default {
  mounted(){
    var vm = this;
    
    Fire.$on('ProductCreated', function($data){
     
      vm.productListing = [];

      vm.products.push(data.product);

      vm.products.map( (product)=> {
        vm.productListing.push({
            id: product.id,
            name: product.name,
            description: product.description,
            supplier_id: product.supplier_id,
            category_id: product.category_id,
            origin_type_id: product.origin_type_id,
            origin_id: product.origin_id,
            part_code: product.part_code,
            unit_cost: product.unit_cost,
            rate: product.rate,
            current_stock: product.current_stock,
            reserved_stock: product.reserved_stock,
            available_stock: product.available_stock,
            tax_type: product.tax_type,
            status: product.status,
            actions: ""
          })
      });

      vm.tabIndex = 0;

    });
  },
  data() {
    return {
      products: [],
      perPage: 20, 
      currentPage: 1,
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
  },
  methods:{
    getProducts(companies = null){
      var vm = this;
        axios.get('/products/get-all').then(function (response) {

        vm.products = response.data.products;

        vm.products.map( (product)=> {
          vm.productListing.push({
              id: product.id,
              name: product.name,
              description: product.description,
              supplier_id: product.supplier_id,
              category_id: product.category_id,
              origin_type_id: product.origin_type_id,
              origin_id: product.origin_id,
              part_code: product.part_code,
              unit_cost: product.unit_cost,
              rate: product.rate,
              current_stock: product.current_stock,
              reserved_stock: product.reserved_stock,
              available_stock: product.available_stock,
              tax_type: product.tax_type,
              status: product.status,
              actions: ""
            })
        });
      });
    }
  },
  computed: {
    rows() {
      return this.productListing.length
    }
  },
  created() {
    this.getProducts();
  }
};
</script>
 