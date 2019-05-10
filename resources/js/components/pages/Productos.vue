<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" style="height: 1em;"></div>
      
      <producto 
        v-for="producto in productos" 
        :key="producto.id_producto" 
        :producto="producto">
      </producto>

    </div>
  </div>

</template>
<script>
  import producto from "./Producto"
  export default {
   data() {
     return {
      productos: []
     }
   },
   methods: {
     mostrarProductos() {
       axios.get('/productos').then(response => {
        this.productos = response.data })
     }
   },
   created() {
     this.mostrarProductos()
   },
   components: {
      producto
    }
  }
</script>
