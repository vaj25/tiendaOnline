<template>
  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
        <h4>{{ producto.nombre_producto }}</h4>
        <div class="">
          <img src="http://localhost:8000/images/laptop.jpg" class="prod-image">
        </div>
        <div class="prod-content">
          <h5> $ {{ producto.precio_producto }} </h5>
          <div class="d-flex">
            <div class="">
              <form @submit.prevent="addCarrito" method="post">
                <div class="">
                  <input type="hidden" name="id_producto" id="id_producto" v-model="id_producto">
                  <input type="hidden" name="cliente" id="cliente" v-model="cliente">
                  <input id="cantidad" type="text" value="1" name="cantidad" v-model="cantidad" class="input-cantidad">
                  <br>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-lg">Agregar al carrito</button>
                  </div>
                </div>
              </form>
              <br>
              <a href="">Ver detalles</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>
<script>
  export default {
    props: ['producto'],
    data() {
      return {
        cliente: '',
        cantidad: 1,
        id_producto: null,
        producto: {
          id_producto: '',
          nombre_producto: '',
          descripcion_producto: '',
          precio_producto: ''
        }
      }
    },
    methods: {
      addCarrito() {
        axios.post(
          '/carrito-productos',
          {
            cliente: this.cliente,
            producto: this.id_producto,
            cantidad: this.cantidad
          }
        ).then(response => {
          this.resp = response
        }).catch(e => {
          console.log(e)
        })
      },
      getUser() {
        axios.get('/user').then(response => {
          this.cliente = response.data.id
          })
      }
    },
    created() {
      this.getUser()
    },
    mounted() {
      $("input[name='cantidad']").TouchSpin({
        min: 1,
        max: 100,
        boostat: 5,
        maxboostedstep: 10,
      });

      this.id_producto = this.producto.id_producto
    }
  }
</script>
