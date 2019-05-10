<template>
  <div class="container-fluid">
    <div class="row" v-if="id==1">
      <div class="col-lg-12" style="height: 1em;"></div>
      <producto 
        v-for="producto in productos" 
        :key="producto.id_producto" 
        :producto="producto">
      </producto>
    </div>
    <div v-else class="row">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <h5>Lo sentimos no tenemos productos en esta categoría</h5>
        </div>
      </div>
    </div>
  </div>

</template>
<script>
  import producto from "./Producto"
  export default {
    props: ['id'],
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
