<template>
  <div class="container-fluid" id="background_dashboard">
    <div class="row">
      <div class="col-lg-12" style="height: 20em;"></div>
      <div class="row">
        
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="card-image">
                <img src="http://localhost:8000/images/laptop.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>Laptops</h3>
                <p class="m-t-20 m-p-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, minima. Molestias vel reprehenderit rem mollitia provident! Nulla voluptatem vel deleniti ex in at maxime doloribus esse est, perspiciatis dolores quos?
                </p>
                <div class="d-flex">
                  <div class="read">
                    <router-link :to="{ path : '/productos/1' }">
                      Ver más
                    </router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="card-image">
                <img src="http://localhost:8000/images/monitor.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>Monitores</h3>
                <p class="m-t-20 m-p-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, minima. Molestias vel reprehenderit rem mollitia provident! Nulla voluptatem vel deleniti ex in at maxime doloribus esse est, perspiciatis dolores quos?
                </p>
                <div class="d-flex">
                  <div class="read">
                    <a href="">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="card-image">
                <img src="http://localhost:8000/images/hdd_ssd.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>HDD/SSD</h3>
                <p class="m-t-20 m-p-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, minima. Molestias vel reprehenderit rem mollitia provident! Nulla voluptatem vel deleniti ex in at maxime doloribus esse est, perspiciatis dolores quos?
                </p>
                <div class="d-flex">
                  <div class="read">
                    <a href="">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="card-image">
                <img src="http://localhost:8000/images/ram.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>Memorias RAM</h3>
                <p class="m-t-20 m-p-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, minima. Molestias vel reprehenderit rem mollitia provident! Nulla voluptatem vel deleniti ex in at maxime doloribus esse est, perspiciatis dolores quos?
                </p>
                <div class="d-flex">
                  <div class="read">
                    <a href="">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
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
      //
     }
   } 
  }
</script>
