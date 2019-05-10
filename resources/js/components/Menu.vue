<template>
  <nav id="nav">

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <router-link :to="{ name : routes.dashboard.path }" class="navbar-brand mr-0 mr-md-2">
        <h2>
          {{ routes.dashboard.name }}
        </h2>
      </router-link>
      <li v-for="(route, key) in routes.unlogged" v-bind:key="route.path" class="nav-item">
        <router-link  :to="{ name : route.path }" :key="key" class="nav-link">
          {{route.name}}
        </router-link>
      </li>
      <!--LOGOUT-->
      <li v-if="$auth.check()" class="nav-item">
        <a href="#" @click.prevent="$auth.logout()">Logout</a>
      </li>
      <li class="nav-item">
        <router-link :to="{ path : '/carrito/productos/'+userid }">
          <span class="material-icons" style="fontSize: 36px;">shopping_cart</span>
        </router-link>
      </li>
    </ul>
  </nav>
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