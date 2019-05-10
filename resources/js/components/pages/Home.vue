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
                  Contamos con artículos de diferentes marcas reconocidas como HP, Lenovo, Dell, Toshiba, Alienware, Mountain y mas. Además, te brindamos de una gran variedad de respuestos.
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
                  Contamos con una gran cantidad de marcas reconocidas en el sector de los monitores como HP, Sony, Dell, AOC, LG, BenQ, Samsung, y mas. Y de diferentes dimenciones 
                </p>
                <div class="d-flex">
                  <div class="read">
                    <router-link :to="{ path : '/productos/2' }">
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
                <img src="http://localhost:8000/images/hdd_ssd.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>HDD/SSD</h3>
                <p class="m-t-20 m-p-20">
                  Contamos con una basta cantidad de HDD y SSD de las marcas mas reconocidas del sector como son Kingston, Samsung, Adata, Western Digital. Y con capacidades de 128GB hasta 1TB.
                </p>
                <div class="d-flex">
                  <div class="read">
                    <router-link :to="{ path : '/productos/3' }">
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
                <img src="http://localhost:8000/images/ram.jpg" class="cat-image">
              </div>
              <div class="card-content">
                <h3>Memorias RAM</h3>
                <p class="m-t-20 m-p-20">
                  Contamos con las mejores memorias RAM DDR3 y DDR4 del mercado desde los 4GB hasta los 16GB,  de marcas como Kingston, Adata, Team Group, Elite. Tanto DIMM como SODIMM.
                </p>
                <div class="d-flex">
                  <div class="read">
                    <router-link :to="{ path : '/productos/4' }">
                      Ver más
                    </router-link>
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
