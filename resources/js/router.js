import VueRouter from 'vue-router'
// Pages
import Home from './components/pages/Home'
import Register from './components/pages/Register'
import Login from './components/pages/Login'
import Carrito from './components/pages/Carrito'
import Productos from './components/pages/Productos'

// Routes
const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: {
      auth: undefined
    }
  },
  {
    path: '/productos/:id',
    name: 'productos',
    component: Productos,
    props: true,
    meta: {
      auth: undefined
    }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      auth: false
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      auth: false
    }
  },
  // USER ROUTES
  {
    path: '/carrito/productos/:user',
    name: 'carrito',
    component: Carrito,
    props: true,
    meta: {
      auth: true
    }
  }
]

const router = new VueRouter({
  history: true,
  mode: 'history',
  routes,
})

export default router
