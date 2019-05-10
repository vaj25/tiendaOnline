<template>
  <tr v-if="show">
    <th scope="row">
      <span v-on:click="deleteProducto()" class="material-icons" style="fontSize: 1empx; color: red; cursor: pointer;">clear</span> 
    </th>
    <td> <img v-bind:src="'http://localhost:8000/images/articulos/' + producto.id_producto + '.jpg'" class="carrito-image"> </td>
    <td> {{ producto.descripcion_producto }} </td>
    <td> ${{ producto.precio_producto }} </td>
    <td> {{ carrito_producto.cantidad_carrito_producto }} </td>
    <td> ${{ this.producto.precio_producto * this.carrito_producto.cantidad_carrito_producto }} </td>
  </tr>

</template>
<script>
  export default {
    props: ['carrito_producto'],
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
          this.$swal({
            type: 'warning', 
            title: 'Tu artículo se elimino del carrito', 
          });
          this.$emit('delete')
        });
      }
    },
    created() {
      this.getUser(),
      this.getProducto()
    },
    mounted() {      
      // 
    }
  }
</script>
