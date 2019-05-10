<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12"><br></div>

      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="d-flex justify-content-center">
          <h1> TU <b>CARRITO</b> DE COMPRA </h1>
        </div>
      </div>
      <div class="col-lg-1"></div>

      <div class="col-lg-12"><br></div>

      <div class="row" v-if="carrito_productos.length > 0">
        <div class="col-lg-1"></div>
        <div class="col-lg-6" >
          <div class="table-responsive-lg">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Artículo</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody>
                <productos 
                  v-for="(carrito_producto, index) in carrito_productos" 
                  :key="carrito_producto.id_carrito_producto" 
                  :carrito_producto="carrito_producto"
                  @delete="deleteProducto(index)">
                </productos>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-4" >
          <factura :carrito="carrito_productos[0].id_carrito" @comprar="delAllProductos()">
          </factura>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="col-lg-12" v-else>
        <div class="d-flex justify-content-center">
          <h4>Tu carrito esta vacío.</h4> 
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  import productos from "./CarritoProductos"
  import factura from "./Factura"
  export default {
    props: ['user'],
    data() {
      return {
        carrito_productos: []
      }
    },
    methods: {
      mostrarProductos() {
        axios.get('/carrito-productos/'+this.user).then(response => {
          this.carrito_productos = response.data
           })
      },
      deleteProducto(index) {
        this.carrito_productos.splice(index, 1);
      },
      delAllProductos() {
        this.carrito_productos.splice(0,this.carrito_productos.length)
      },
      getUser() {
        axios.get('/user').then(response => {
          this.cliente = response.data.id
        })
      }
    },
    created() {
      this.mostrarProductos()
    },
    components: {
      productos,factura
    }
  }
</script>