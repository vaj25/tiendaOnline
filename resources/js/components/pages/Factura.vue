<template>
  
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total</h4>
      <div class="d-flex">
        <div class="mr-auto p-2"><h5>Subtotal: </h5></div>
        <div class="p-2">$700</div>
      </div>
      <hr>

      <div class="d-flex">
        <div class="mr-auto p-2"><h5>Total: </h5></div>
        <div class="p-2">$700</div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-success btn-lg">COMPRAR</a>
      </div>
    </div>
  </div>

</template>
<script>
  export default {
    props: ['carrito'],
    data() {
      return {
        producto: {
          id_producto: '',
          nombre_producto: '',
          descripcion_producto: '',
          precio_producto: ''
        },
        show: true
      }
    },
    methods: {
      getProducto() {
        axios.get(
          '/productos/'+this.carrito_producto.id_producto,
        ).then(response => {
          this.producto = response.data
        }).catch(e => {
          console.log(e)
        })
      },
      getUser() {
        axios.get('/user').then(response => {
          this.cliente = response.data.id
        })
      },
      deleteProducto() {
        axios.delete(`/carrito-productos/${this.carrito_producto.id_carrito_producto}`).then(() => {
          this.show = false
        });
      }
    },
    created() {
      this.getUser()
    },
    mounted() {      
      // 
    }
  }
</script>
