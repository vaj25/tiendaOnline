<template>
  
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total</h4>
      <div class="d-flex">
        <div class="mr-auto p-2"><h5>Subtotal: </h5></div>
        <div class="p-2">${{factura.subtotal}}</div>
      </div>
      <hr>

      <div class="d-flex">
        <div class="mr-auto p-2"><h5>Total: </h5></div>
        <div class="p-2">${{factura.subtotal}}</div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="#" @click="addFactura" class="btn btn-success btn-lg">COMPRAR</a>
      </div>
    </div>
  </div>

</template>
<script>
  export default {
    props: ['carrito'],
    data() {
      return {
        factura: {
          carrito: 0,
          total: 0,
          subtotal: 0
        },
        cliente: 0
      }
    },
    methods: {
      getFactura() {
        axios.get(
          '/facturas/'+this.carrito,
        ).then(response => {
          this.factura = response.data
        }).catch(e => {
          console.log(e)
        })
      },
      getUser() {
        axios.get('/user').then(response => {
          this.cliente = response.data.id
        })
      },
      addFactura() {
        axios.post('/facturas/', this.factura).then(() => {
          axios.put(`/carritos/${this.factura.carrito}`, 
          {
            id: this.factura.carrito
          }).then(() => {
            this.$swal({
              type: 'success', 
              title: 'Compra realizada con exito', 
            })
            this.$emit('comprar')
          }).catch(e => {
            console.log(e)
          })
        }).catch(e => {
          console.log(e)
        })
      }
    },
    created() {
      this.getUser(),
      this.getFactura()
    },
    mounted() {      
      // 
    }
  }
</script>
