<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <router-link :to="{ name : 'home' }" style="text-decoration: none;">
            <h2>
              TiendaOnline
            </h2>
          </router-link>
        </div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">Iniciar sesión</div>
          <div class="card-body">
            <div class="alert alert-danger" v-if="has_error">
              <p>Error, no se pudo conectar con las credenciales.</p>
            </div>
            <form autocomplete="off" @submit.prevent="login" method="post">
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com"  v-model="email" required>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
              </div>
              <button type="submit" class="btn btn-default">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        email: null,
        password: null,
        has_error: false
      }
    },
    mounted() {
      //
    },
    methods: {
      login() {
        // get the redirect object
        var redirect = this.$auth.redirect()
        var app = this
        this.$auth.login({
          params: {
            email: app.email,
            password: app.password
          },
          success: function() {
            // handle redirection
            const redirectTo = redirect ? redirect.from.name : '/'
            this.$router.push({name: redirectTo})
          },
          error: function() {
            app.has_error = true
          },
          rememberMe: true,
          fetchUser: true
        })
      }
    }
  }
</script>