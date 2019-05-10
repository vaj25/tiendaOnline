<template>

  <div class="center-contents">
    <router-link :to="{ name : routes.dashboard.path }" class="logo navbar-brand">
      <h2>
        {{ routes.dashboard.name }}
      </h2>
    </router-link>
    <nav class="page-nav">
      <ul>
        <li class="nav-item">
          <input type="text" class="form-control" placeholder="Busca aquí los artículos" autocomplete="off" />
        </li>
        <span v-if="!$auth.check()">
          <li v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
            <router-link  :to="{ name : route.path }" :key="key">
              {{route.name}}
            </router-link>
          </li>
        </span>
        <li v-if="$auth.check()" class="nav-item">
          <a href="#" @click.prevent="$auth.logout()">Cerrar sesión</a>
        </li>
        <li class="nav-item">
          <router-link :to="{ path : '/carrito/productos/'+userid }">
            <span class="material-icons" style="fontSize: 36px;">shopping_cart</span>
          </router-link>
        </li>
      </ul>
    </nav>
  </div>

</template>
<script>
  export default {
    data() {
      return {
        userid: 0,
        routes: {
          // UNLOGGED
          dashboard: {
            name: 'TiendaOnline',
            path: 'home'
          },
          unlogged: [
            {
              name: 'Registrate',
              path: 'register'
            },
            {
              name: 'Inicia sesión',
              path: 'login'
            }
          ],
        }
      }
    },
    methods: {
      getUser() {
        axios.get('/user').then(response => {
          this.userid = response.data.id
          })
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